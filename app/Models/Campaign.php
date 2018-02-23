<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = 'campaign';
    public $timestamps = false;

    public function tabUser(){
    	return $this->belongsTo('App\User');
    }
}

?>
