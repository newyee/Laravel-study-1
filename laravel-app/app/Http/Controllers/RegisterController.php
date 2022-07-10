<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequests;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * ユーザー登録画面を表示
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('register');
    }

     /**
     * 新規ユーザー登録処理
     * @param App\Http\Requests\UserRequests $request
     * @return \Illuminate\View\View
     */

    public function store(UserRequests $request)
    {
        $userData = User::create($request->all());
        session(['id' => $userData->id, 'name' => $userData->name]);
        return redirect()->route('home.index');
    }
}
