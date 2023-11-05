<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::post('/uploaddoc', [\App\Http\Controllers\Controller::class, 'uploaddoc'])->name('uploaddoc');
Route::get('/chatbots', [\App\Http\Controllers\Controller::class, 'chatbots'])->name('chatbots');

// Route::get('/uploaddoc',function(Request $request){
//     return $request;
// })->name('uploaddoc');
