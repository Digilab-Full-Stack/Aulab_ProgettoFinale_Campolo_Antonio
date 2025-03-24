<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function dashboard(){
        $adminRequests = User::where('is.admin', NULL)->get();
        $revisorRequests = User::where('is.revisor', NULL)->get();
        $writerRequests = User::where('is.writer', NULL)->get();
        return view('admin.dasboard', compact('adminRequests', 'revisorRequests', 'writerRequests'));
    }

    public function setAdmin(User $user) {
        $user->is_admin = true;
        $user->save();
        return redirect(route('admin.dashboard'))->with('message', 'Hai reso $user->name amministratore' );
    }
    public function setRevisor(User $user) {
        $user->is_revisor = true;
        $user->save();
        return redirect(route('admin.dashboard'))->with('message', 'Hai reso $user->name revisore' );
    }

    public function setWriter(User $user) {
        $user->is_writer = true;
        $user->save();
        return redirect(route('admin.dashboard'))->with('message', 'Hai reso $user->name redattore' );
    }
}
