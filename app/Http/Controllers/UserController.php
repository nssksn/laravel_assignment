<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', ['users' => $users]);
    }

    public function edit()
    {
        //ログインしているユーザー情報を取得
        $user = Auth::user();

        return view('users.edit', compact('user'));

    }

    public function login()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }
        else
        {
            return view('auth.login');
        }
    }
}
