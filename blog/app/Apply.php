<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
	protected $table = 'apply';
    protected $fillable=['name','email','logomark','proof','algorithm'];

    //
}
