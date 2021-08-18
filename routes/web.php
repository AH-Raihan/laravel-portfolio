<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


// Route::get('/',function(){
// return redirect('/home');
// });
Route::get('/',[SiteController::class, 'showHome']);
Route::get('/about',[SiteController::class, 'showAbout']);
Route::get('/service',[SiteController::class, 'showservice']);
Route::get('/portfolio',[SiteController::class, 'showPortfolio']);
