<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function usertop(Request $request)
    {
        return view('user.usertop');
    }

    public function mypage(Request $request)
    {
        $auth = Auth::user();
        return view('user.usertop', ['auth' -> $auth]);
    }

    public function anypage(Request $request)
    {
        return view('user.anypage');
    }
}
