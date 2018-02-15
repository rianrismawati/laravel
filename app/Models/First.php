<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class First extends Model
{
	// use SoftDeletes;
	protected $dates = ['deleted_at'];

    protected $table = 'first';
    //
    public $timestamps = false; //gaada create_at & updated_at

    protected $fillable = ['title', 'description'];//whitelist

    // protected $guarded = [''];blacklist
    
}
