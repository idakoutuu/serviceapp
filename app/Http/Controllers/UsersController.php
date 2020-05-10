<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function usertop(Request $request)
    {
        return view('user.usertop');
    }

    public function mypage(Request $request)
    {
        return view('user.mypage');
    }

    public function anypage(Request $request)
    {
        return view('user.anypage');
    }
}
