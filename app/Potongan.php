<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Potongan extends Model
{
    protected $table = "potongan";
    protected $fillable = [
		'id_potongan', 
		'nama_potongan', 
		'nominal_potongan', 
		'created_at', 
		'updated_at'
    ];
}
