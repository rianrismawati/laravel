<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    //
    protected $table = 'donasi';
    protected $fillable = [
        'id_camp', 'id', 'nom_don', 'komen_d', 'tgl_don', 'transfer_via', 'status'
    ];
    public $timestamps = false;
    

    public function user(){
    	return $this->hasMany('App\User');
    }
    public function campaign(){
    	return $this->belongsTo('App\Models\Campaign');
    }
}
