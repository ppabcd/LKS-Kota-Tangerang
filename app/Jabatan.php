<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = "jabatan";
    protected $fillable =[
    	'kode_jabatan', 
    	'nama_jabatan', 
    	'tunjangan', 
    	'gaji', 
    	'created_at', 
    	'updated_at'
    ];
}
