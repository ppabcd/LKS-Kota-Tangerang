<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
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
    	session_destroy();
    	return redirect('/login');
    }
}
