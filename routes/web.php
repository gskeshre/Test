<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('sample');
});
// public $abc = "abced";
Route::get('/contact-us', function () {
//	$abc = "abscdghdf";
    return 'eabc';
});
*/
/*
Route::get('/contact_us',['middleware' => 'Age:200',
   'uses' => 'TestController@index',
]);*/

//Route::get('/', function () {
  //  return view('registration');
// });

//Route::get('sample','TestController@index');

//Route::resource('hello','MyCRUD');
//Route::get('/','UrlControl@index');

//Route::get('/crud',function() {
  // return view('CRUD.edit');
//});

//Route::post('/sample','UserRegistor@postRegister');
//Route::get('/contact_us','UserRegistor@displayUser');


//Session for users
// Route::view('login','session.login');

 /*Route::get('welcome',function(){ return view('welcome');});
 Route::post('session.login','Login@index');
// Route::view('profile','session.profile');

Route::get('login',function() {
   
   if(session()->has('data'))
   {
   		return redirect('profile');
   }

   return view('session.login');
 });

//Route::post('session.login','Login@index');

Route::get('profile',function() {
   
   if(!session()->has('data'))
   {
   		return redirect('login');
   }

   return view('session.profile');
 });


Route::get('logout',function()
{
	session()->forget('data');
	return redirect('login');
});
*/
Route::get('index','StudentUpdate@index');
Route::get('create','StudentUpdate@create');

Route::get('show/{id}','StudentUpdate@show')->name("show");
Route::get('edit/{id}','StudentUpdate@edit')->name("edit");
Route::post('update/{id}','StudentUpdate@update')->name("update");
Route::post('store','StudentUpdate@store');
Route::delete('destroy/{id}','StudentUpdate@destroy')->name("destroy");
Route::get('crud2.testing',function(){ return view('crud2.testing');});



//CRUD files

Route::resource('user','UserRegistor');
// Route::resource('crud2','StudentUpdate');


// Route::get('crud2',function(){
//     return view('crud2.index');
// });

// Route::get('create',function(){
//     return view('crud2.create');
// })->name("crud2");
// */