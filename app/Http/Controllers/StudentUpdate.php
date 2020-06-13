<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentRecord;

class StudentUpdate extends Controller
{
    
    //Index Page
    public function index()
    {
    	$stud = StudentRecord::get();
    	return view('crud2.index')->with(['stud'=>$stud]);
    }

    /*public function index1()
    {
        $stud = StudentRecord::latest()->paginate(5);
  
        return view('crud2.index',compact('stud'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }*/

    //Create Page
    public function create(){   return view('crud2.create');}


    ////Store Page
    public function  store(Request $req)
    {
    	$req->validate([
            'rollno' => 'required',
            'name' => 'required',
        ]);

        StudentRecord::create($req->all());
   
        return redirect('index')->with('success','User created successfully.');

    }

    //Show Page
    public function  show(Request $request, StudentRecord  $stud)
    {
        $st = $stud::where('id',$request->id)->first();
      return view('crud2.show',compact('st'));
    }
    
    //Edit Page
    public function  edit(Request $req,StudentRecord  $stud)
    {
        $st = $stud::where('id',$req->id)->first();
      return view('crud2.edit',compact('st'));
    }
    

    //Update Page
    public function update(Request $req,StudentRecord $stud)
    {
    	$req->validate([
            'rollno' => 'required',
            'name' => 'required',
            
        ]);
            $form_req = array(
                'rollno' => $req->rollno,
                'name' => $req->name);
            StudentRecord::whereId($req->id)->update($form_req);
     //       $stud->update($req->all());
  
        return redirect('index')->with('success','User updated successfully');

    }
    

    //Destroy Page
    public function  destroy(Request $req,StudentRecord $stud)
    {
        $st = $stud::where('id',$req->id)->first();
    	$st->delete();
    	return redirect('index')->with('success','User created successfully.');
    }
}
