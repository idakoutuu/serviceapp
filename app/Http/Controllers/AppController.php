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
    public function index($event_id)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.gnavi.co.jp/RestSearchAPI/v3/?keyid=458e7c74ce130a78394c9522748bc0c4&hit_per_page=30&offset_page=10&freeword=肉', [
            'query' => ['event_id' => $event_id]
        ]);

        $json = json_decode($res->getBody(), true);

        return array(
            "name" => $json['events'][0]["name"], 
            "area" => $json['events'][0]["area"], 
            "hit_per_page" => $json['events'][0]["hit_per_page"],
            "freeword" => $json['events'][0]["freeword"], 
            "offset" => $json['events'][0]["offset"], 
        );
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
        return view('app.restaurant');
    }
    

}
