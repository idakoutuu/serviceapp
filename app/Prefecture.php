<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'prefecture_name' => 'required'
    );

    public function user()
    {
        return $this->hasOne('App\user');
    }
}
