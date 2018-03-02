<?php
namespace App\Http;

/**
* 
*/
class Helpers
{
	public static function uniquenumber($num,$leg=5){
		$d = strlen((int)$num);
		$s = $leg - $d;
		$e = "";
		for ($i=0; $i < $s; $i++) { 
			$e .= "0";
		}
		return $e.((int)$num);
	}
	public static function rp($num){
		return number_format($num,'0');
	}
}