<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Person;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        return view('hello.index');
    }

    public function service(Request $request)
    {
        return view('hello.service');
    }

    public function message(Request $request)
    {
        return view('hello.message');
    }

    public function contact(Request $request)
    {
        return view('hello.contact');
    }

    public function terms(Request $request)
    {
        return view('hello.terms');
    }

    public function restaurant(Request $request)
    {
        return view('hello.restaurant');
    }

    public function login(Request $request)
    {
        $user = Auth::user();
        $sort = $request->sort;
        $items = Person::orderBy($sort, 'asc')
            ->simplePaginate(5);
        $param = ['items' => $item, 'sort' => $sort, 'user' => $user];
        return ;
    }
}
