<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
public function homepage () {
        return view('welcome');
    }
    public function login () {
        return view('auth.login');
    }
    public function register () {
        return view('auth.register');
    }

}
