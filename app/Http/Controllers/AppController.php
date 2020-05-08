<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

class AppController extends Controller
{
    public function index(Request $request)
    {
        return view('app.index');
    }

    public function service(Request $request)
    {
        return view('app.service');
    }

    public function message(Request $request)
    {
        return view('app.message');
    }

    public function contact(Request $request)
    {
        return view('app.contact');
    }

    public function confirm(ContactRequest $request)
    {
         //フォームから受け取ったすべてのinputの値を取得
         $inputs = $request->all();
         return view('app.confirm', ['inputs'=>$inputs]);
    }
    public function send(ContactRequest $request)
    {  
         $contact = new Contact;
         $form = $request->all();
         unset($form['_token']);
         $contact->fill($form)->save();
         return view(('app.thanks'));
    }

    public function terms(Request $request)
    {
        return view('app.terms');
    }

    public function restaurant(Request $request)
    {
        return view('app.restaurant');
    }

}
