<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = "karyawan";
    protected $fillable =[
    	"nip",
    	"kode_jabatan",
    	"nama",
    	"alamat",
    	"email",
    	"nop_telp",
    	"username",
    	"password",
    	"status_perkawinan",
    	"created_at",
    	"updated_at"
    ];

    public function jabatan(){
        return $this->belongsTo('App\Jabatan',"kode_jabatan","kode_jabatan");
    }
}
