<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\user_data_model;

// class UserRegistor extends Controller
// {
//      public function postRegister(Request $request) {
//       //Retrieve the name input field
//       $game = new user_data_model;

//       $name = $request->name;
//       //echo 'Name: '.$name;
//       echo '<br>';
      
//       //Retrieve the username input field
//       $username = $request->username;
//       //echo 'Username: '.$username;
//       echo '<br>';
      
//       //Retrieve the password input field
//       $password = $request->password;
//       //echo 'Password: '.$password;

        
//         $game->name = request('name');
//         $game->uname = request('username');
//         $game->password = request('password');
//         $game->save();
//         echo 'Record Save Successfully!';
//         echo '<br>';
//         echo '<br>';
//         return view('sample');

//     }
 
//     public function displayUser (Request $request){
//         $user = user_data_model::get();
//         return view('contact_us')->with('users',$user);
//     }     
// } 
  
namespace App\Http\Controllers;
  
 
use Illuminate\Http\Request;
use App\user_data_model;
  
class UserRegistor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = user_data_model::latest()->paginate(5);
  
        return view('CRUD.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'uname' => 'required',
            'password' => 'required',
        ]);
  
        user_data_model::create($request->all());
   
        return redirect()->route('user.index')
                        ->with('success','User created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(user_data_model $user)
    {
        return view('CRUD.show',compact('user'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(user_data_model $user)
    {
        return view('CRUD.edit',compact('user'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_data_model $user)
    {
        $request->validate([
            'name' => 'required',
            'uname' => 'required',
            'password' => 'required',

        ]);
  
        // $user->name=$request->name;
        // $user->uname=$request->uname;
        // $user->password=$request->password;

        $user->update($request->all());
  
        return redirect()->route('user.index')
                        ->with('success','User updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_data_model $user)
    {
        $user->delete();
  
        return redirect()->route('user.index')
                        ->with('success','User deleted successfully');
    }
}
