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
    return view('main');
});

Route::group(['namespace'=>'App\Http\Controllers', 'prefix' => 'staff'], function (){
   Route::get('/', 'StaffController@index') ->name('staff.index');
   Route::get('/create', 'StaffController@create') ->name('staff.create');
   Route::post('/store', 'StaffController@store') ->name('staff.store');
   Route::get('/show/{id}', 'StaffController@show') ->name('staff.show');
   Route::delete('/delete/{id}', 'StaffController@delete') ->name('staff.delete');
   Route::get('/edit/{id}', 'StaffController@edit') ->name('staff.edit');
   Route::put('/update/{id}', 'StaffController@update') ->name('staff.update');
});

Route::resource('student', 'App\Http\Controllers\StudentController');
