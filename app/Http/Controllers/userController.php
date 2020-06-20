<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail_Emp;

class userController extends Controller
{
    
	public function index()
    {
    	$emp = Detail_Emp::get();
    	return response()->json(["emp"=>$emp],200);
    }


    public function create(){   return response()->json(["emp"=>$emp],200);}

     public function  store(Request $req)
    {
    	$req->validate([
            'rollno' => 'required',
            'name' => 'required',
        ]);

        Detail_Emp::create($req->all());
   
        return response()->json(['success'=>'User created successfully.'],200);

    }

    public function show(Request $request) 
    {
             $emp = Detail_Emp::where('id',$request->id)->first();
      return response()->json(["emp"=>$emp],200);

   	}
   
   	public function  edit(Request $req)
    {        
             $emp = Detail_Emp::where('id',$req->id)->first();
      return response()->json(["emp"=>$emp],200);
    }
    

    
    public function update(Request $req)
    {
    	$req->validate([
            'rollno' => 'required',
            'name' => 'required',
            
        ]);
        $form_req = array(
                'rollno' => $req->rollno,
                'name' => $req->name);
               Detail_Emp::whereId($req->id)->update($form_req);
     //       $stud->update($req->all());
        return response()->json(['success'=>'User Update successfully.'],200);

    }
    
    public function  destroy(Request $req,Detail_Emp $emp)
    {

		$emp1 = $emp::where('id',$req->id)->first();
    	$emp1->delete();
    	return response()->json(['success'=>'User deleted successfully.'],200);
    }
    



   
}
