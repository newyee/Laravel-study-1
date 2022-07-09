<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * ログイン画面を表示
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('login');
    }
}
