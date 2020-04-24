<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function myPage(Request $request)
    {
        return view('user.myPage');
    }

    public function anyPage(Request $request)
    {
        return view('user.anyPage');
    }
}
