<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Validator facades
use Illuminate\Support\Facades\Validator;


class Login extends Controller
{
   function index(Request $req)

   {
   
   		$validator = Validator::make($req->all(),
   			['username' =>'required|string',
   			 'pwd' =>'required|string']);
 
   		if($validator->fails())
   		{
   				return response()->json(["error"=>"Wrong Credentials"],400);
   		}
   		else
   		{
	   	  //return $req->input();
	   		$req->session()->put('data',$req->input());
	   		//return $req->session()->get('data');
	   		
	   		return redirect('profile');
	   	 }
	}
}
