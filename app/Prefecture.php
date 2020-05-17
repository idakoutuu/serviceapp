<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'person_id' => 'required',
        'prefecture' => 'required'
    );

    public function user()
    {
        return $this->belongTo('App\user');
    }
}
