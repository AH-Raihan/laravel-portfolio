<?php

use App\Http\Controllers\db_practice;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


// Route::get('/',function(){
// return redirect('/home');
// });
Route::get('/',[SiteController::class, 'showHome']);
Route::get('/about',[SiteController::class, 'showAbout']);
Route::get('/service',[SiteController::class, 'showservice']);
Route::get('/portfolio',[SiteController::class, 'showPortfolio']);

Route::get('/select',[db_practice::class,'onSelect']);
Route::get('/insert',function(){
    return view('dbInsert');
});
Route::get('/delete',[db_practice::class,'onDelete']);
Route::get('/update',[db_practice::class,'onUpdate']);

Route::post('/insertData',[db_practice::class,'onInsert']);