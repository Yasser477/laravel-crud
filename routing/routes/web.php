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

Route::get('/', function () {
    return view('welcome');
});

// basic route
Route::get('/test', function () {
    return (" welcome ") ;
});

Route::get('/test', [ThisController::class, 'index']);

Route::get('/test/{id}',function($age){ 
    return "my age is :  $age yo"; }); 

   // Routing with 2 Parametre 

    Route::get('/test/{id}/{name}',function($id,$name){ 
        return "ID : $id <br> Name : $name"; });


// 



