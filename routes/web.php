<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee;

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

Route::get('/',[Employee::class,'index']);
Route::get('/manage', function () {
    return view('add');
});
Route::post('/submit',[Employee::class,'submit']);
Route::get('/manage/{id}',[Employee::class,'manage']);
Route::post('/submit/{id}',[Employee::class,'update']);
Route::get('/delete/{id}',[Employee::class,'delete']);