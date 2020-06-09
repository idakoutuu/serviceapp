<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photograph extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'photo' => 'required'
    );

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
