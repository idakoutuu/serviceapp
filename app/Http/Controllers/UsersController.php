<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UsersController extends Controller
{
    public function usertop()
    {
        return view('user.usertop');
    }

    public function mypage(Request $request)
    {
        $auth = Auth::user();
        return view('user.mypage', ['auth' => $auth]);
    }

    public function anypage(Request $request)
    {
        $users = User::all();
        return view('user.anypage', ['users' => $users]);
    }
}
