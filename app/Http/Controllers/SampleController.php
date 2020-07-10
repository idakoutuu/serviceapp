<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SampleNotification;

class SampleController extends Controller
{
    public function SampleNotification()
    {
        $name = '太郎';
        $text = 'よろしくお願い致します。';
        $to = [
            [
            'name' => 'laravel-rito',
            'email' => 'idakoutuu0205@gmail.com'
            ]
        ];
        Mail::to($to)->send(new SampleNotification($name, $text));
    }
}
