<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\studentController;
use Laravel\Sail\SailServiceProvider;

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

Route::get('/test', function () {
    return view('test');
});


Route::get('/edit', function () {
    return view('edit');
});



Route::post('insert',[CrudController::class , 'insert'])->name('insert');
Route::get('test',[CrudController::class , 'show']);
Route::get('edit/{id}', [ CrudController::class, 'edit' ]);
Route::post('update/{id}', [ CrudController::class, 'update' ]);
Route::get('search', [ CrudController::class, 'search']);
Route::get('search/{searchResult}', [ CrudController::class, 'search']);
Route::get('dltpromo/{id}',[ CrudController::class, 'deletePromo']);

Route::get('addStudent/{id}',[ studentController::class, 'add_student']);
Route::post('hahaha',[ studentController::class, 'add']);
Route::get('getS/{id}',[ studentController::class, 'edt_S']);
Route::post('updS/{id}',[ studentController::class, 'update']);
Route::get('delete/{id}',[ studentController::class, 'delete']);




