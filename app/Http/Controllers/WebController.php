<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function login() {
        return view('login', ['title' => "login"]);
    }

    public function registration() {
        return view('registration', ['title' => "Cadastro"]);
    }
}
