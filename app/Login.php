<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    //
    protected $table = "login";
    protected $fillable = [
    	'id_login', 
    	'username', 
    	'password', 
    	'email'
    ];
}
