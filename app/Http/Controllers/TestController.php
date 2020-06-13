<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
	public function index() {
    
      echo "<br>Test Controller.<BR>";
   	$data = [ 'firstname' =>'Hello','lastname' => 'World'];

   	return view('sample',$data);
   }
    //
}
