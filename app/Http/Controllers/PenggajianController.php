<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Karyawan;
use App\Penggajian;
class PenggajianController extends Controller
{
    public function __construct(){
        $this->middleware(function($req,$next){
            if(!isset($_SESSION['login'])){
                return redirect('/');
            }
            return $next($req);
        });
    }
    public function index(){
    	$d['k'] = Karyawan::get();
    	return view('penggajian.home',$d);
    }
}
