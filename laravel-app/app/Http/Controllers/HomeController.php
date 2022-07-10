<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    /**
     * ホーム画面を表示
     *
     * @return \Illuminate\View\View
     */

    public function index() {

        return view('home');
    }
}
