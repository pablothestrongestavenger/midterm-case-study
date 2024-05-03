<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function register(){
    return view('register');
  }
  public function login(){
    return view('login');
  }
  public function landing(){
    return view('landing');
  }
  public function error(){
    return view('error');
  }
}
