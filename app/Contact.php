<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = array('id');

    protected $fillable = [
        'title','text'
    ];

    public static $rules = array(
        'title' => 'required|max:50',
        'text' => 'required|max:300',
    );
}
