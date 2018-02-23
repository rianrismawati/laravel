<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    //
    protected $table = 'donasi';
    public $timestamps = false;

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function campaign(){
    	return $this->belongsTo('App\Models\Campaign');
    }
}
