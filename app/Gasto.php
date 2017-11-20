<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    public function user()
    {
    	$this->belongsTo('App\User');
    }
}
