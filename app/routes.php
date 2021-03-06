<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::any('/user/{user?}/{subsec?}', 'UserController@getUser');


Route::any('/', function()
{
      if(Session::get('message')){
        return View::make('hello')->with('message', Session::get('message'));
      }
      return View::make('hello');
   
});

Route::any('/aids', function()
{
  if(Session::get('message')){
    return View::make('hello')->with('message', Session::get('message'));
  }
  return View::make('hello');
   
});



?>
