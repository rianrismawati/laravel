<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Campaign;
use App\Models\Donasi;

class User extends Authenticatable
{
    public $timestamps = false;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tableDon()
    {
        return $this->hasMany('App\Models\Donasi', 'id_don');
    }

    public function tableCamp(){
        return $this->hasMany('App\Models\Campaign', 'id_camp');
    }
}
