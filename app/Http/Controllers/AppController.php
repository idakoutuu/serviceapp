<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ContactRequest;
use  GuzzleHttp\Client;
use App\Contact;

class AppController extends Controller
{
    public function index()
    {
        return view('app.index');
    }

    public function service()
    {
        return view('app.service');
    }

    public function message()
    {
        return view('app.message');
    }

    public function contact()
    {
        return view('app.contact');
    }

    public function confirm(ContactRequest $request, Contact $contact)
    {
         $user = Auth::user();
         $user_id = $contact->find($user->id);
         //フォームから受け取ったすべてのinputの値を取得
         $inputs = $request->all();
         return view('app.confirm', ['user_id' => $user_id, 'inputs'=>$inputs]);
    }
    public function send(ContactRequest $request, Contact $contact)
    {  
         $contact->title = $request->title;
         $contact->text = $request->text;
         $contact->user_id = auth()->id();
         $contact->save();
         return view(('app.thanks'));
    }

    public function terms(Request $request)
    {
        return view('app.terms');
    }

    public function restaurant($event_id)
    {

        //urlつけてみる！！！！！！！！！次回
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.gnavi.co.jp/RestSearchAPI/v3/', [
            'query' => [
                'keyid' => config('app.gnavikey'),
                'hit_per_page' => 50,
                'offset_page' => 1,
                'freeword' => '藤沢,肉'
            ]
        ]);

        $json = json_decode($res->getBody(), true);

        return view('app.restaurant', compact('json'));
    }
}