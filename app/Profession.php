<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'profession_name' => 'required'
    );

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
