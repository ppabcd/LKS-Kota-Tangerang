<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Helpers;

class TestController extends Controller
{
   	public function index(){
   		echo Helpers::uniquenumber(10);
   	}
}
