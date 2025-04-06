<?php

namespace App\Http\Controllers;

use App\Mail\CareerRequestMail;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            new Middleware('auth', except: ['homepage', 'login', 'register', 'faqs', 'aboutus', 'editorial_team'])
        ];
    }

    public function homepage () {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(4)->get();
        return view('welcome', compact('articles'));
    }
    public function faqs () {
        return view('faqs');
    }
    public function editorial_team () {
        $users=User::all();
        return view('editorial_team', compact('users'));
    }
    public function aboutus () {
        return view('aboutus');
    }
    public function login () {
        return view('auth.login');
    }
    public function register () {
        return view('auth.register');
    }

    public function careers() {
        return view('careers');
    }
    public function careersSubmit(Request $request) {
        $request->validate([
            'role'=>'required',
            'email'=>'email',
            'message'=> 'required'
        ]);
        $user = Auth::user();
        $role = $request->role;
        $email = $request->email;
        $message = $request->message;
        $info = compact('role', 'email', 'message');

        Mail::to('admin@theaulabpost.it')->send(new CareerRequestMail($info));

        switch ($role) {
            case 'admin' :
                $user->is_admin = NULL;
                break;
            case 'revisor' :
                $user->is_revisor = NULL;
                break;
            case 'writer' :
                $user->is_writer = NULL;
                break;
        }

        $user->update();
        return redirect(route('homepage'))->with('message', 'Mail inviata con successo');



    }


}
