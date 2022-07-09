<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * ユーザー登録画面を表示
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('register');
    }
}
