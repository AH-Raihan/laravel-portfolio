<?php

use App\Http\Controllers\aggregatesController;
use App\Http\Controllers\cookieSessionController;
use App\Http\Controllers\db_practice;
use App\Http\Controllers\httpClient;
use App\Http\Controllers\middlewareController;
use App\Http\Controllers\ormStudentsController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\retriveController;
use App\Http\Controllers\selectController;
use App\Http\Controllers\mergeController;
use App\Http\Controllers\joinController;
use App\Http\Controllers\insertController;
use App\Http\Controllers\deleteController;
use App\Http\Controllers\updateController;
use App\Http\Controllers\uploadDownloadController;
use Illuminate\Support\Facades\Route;


// Route::get('/',function(){
// return redirect('/home');
// });
Route::get('/',[SiteController::class, 'showHome']);
Route::get('/about',[SiteController::class, 'showAbout']);
Route::get('/service',[SiteController::class, 'showservice']);
Route::get('/portfolio',[SiteController::class, 'showPortfolio']);


//############################################################
//#########################   Raw sql   ######################
//############################################################
Route::get('/select',[db_practice::class,'onSelect']);
Route::get('/insert',function(){
    return view('dbInsert');
});
Route::get('/delete',function(){
    return view('dbDelete');
});
Route::get('/insert',function(){
    return view('dbInsert');
});
Route::view('/update','dbUpdate');



// ###################################
// #########  raw sql post  ##########
// ###################################
Route::post('/insertData',[db_practice::class,'onInsert']);
Route::post('/deleteData',[db_practice::class,'onDelete']);
Route::post('/updateData',[db_practice::class,'onUpdate']);


// ##################################################
// #######  retriveController query builder  ########
// ##################################################
Route::get('/selectAllRows',[retriveController::class, 'selectAllRows']);
Route::get('/selectOneRows',[retriveController::class, 'selectOneRows']);
Route::get('/findRows',[retriveController::class, 'findRows']);
Route::get('/selectOneColumn',[retriveController::class, 'selectOneColumn']);
Route::get('/selectMultiColumn',[retriveController::class, 'selectMultiColumn']);
Route::get('/speceficData',[retriveController::class, 'speceficData']);


//###################################################
//######  Aggregates controller query builder  ######
//###################################################
Route::get('/count',[aggregatesController::class,'count']);
Route::get('/max',[aggregatesController::class,'max']);
Route::get('/min',[aggregatesController::class,'min']);
Route::get('/avg',[aggregatesController::class,'avg']);


//#####################################################
//########  Select Controller query builder  ##########
//#####################################################
Route::get('/UniqeSelect',[selectController::class,'UniqeSelect']);
Route::get('/singleColumnSelect',[selectController::class,'singleColumnSelect']);
Route::get('/multiColumnSelect',[selectController::class,'multiColumnSelect']);


// #########################################################
// ##################  merge query builder  ################
// ##########################################################
Route::get('/merge',[mergeController::class,'mergeData']);

// ############################################################
// ##################   join query builder    #################
// ############################################################
Route::get('/leftJoin',[joinController::class,'leftJoin']);
Route::get('/rightJoin',[joinController::class,'rightJoin']);


// ############################################################
// ##################  insert query builder  ##################
// ############################################################
Route::get('/insertQuery',[insertController::class,'insert']);
Route::get('/insertQueryOrIgnore',[joinController::class,'insertorignore']);


// ############################################################
// ##################  delete query builder  ##################
// ############################################################
Route::get('/deleteOne',[deleteController::class,'deleteOne']);
Route::get('/deleteAllWithoutReset',[deleteController::class,'deleteAllWithoutReset']);
Route::get('/deleteAllWithReset',[deleteController::class,'deleteAllWithReset']);



// ############################################################
// ##################  update query builder  ##################
// ############################################################
Route::get('/updateqb',[updateController::class,'onupdate']);



// ############################################################
// ########################  ORM Model  #######################
// ############################################################
Route::get('/allorm',[ormStudentsController::class,'allSelect']);



// ############################################################
// ########################  Http client  #####################
// ############################################################
Route::get('http1',[httpClient::class,'http1']);


// ############################################################
// ###########   laravel storage File Upload     ##############
// ############################################################
Route::view('/fileUpload','storageUpload');
Route::post('/fileUp',[uploadDownloadController::class,'onFileUp']);

Route::get('/download/{folderPath}/{name}',[uploadDownloadController::class,'onDownload']);
Route::get('/delete/{folderPath}/{Path}',[uploadDownloadController::class,'onDelete']);
Route::get('/FileList',[uploadDownloadController::class,'FileList']);

// ############################################################
// ###################     MiddleWare     #####################
// ############################################################

Route::get('/middlewareRoute/{token}',function (){
    return view('Home');
})->middleware('demo');

Route::get('/middlewareController/{token}',[middlewareController::class,'middlewareCon']);


// ############################################################
// ###############     Cookie And Session    ##################
// ############################################################
Route::get('/setCookie',[cookieSessionController::class,'setCookie']);
Route::get('/getCookie',[cookieSessionController::class,'getCookie']);
Route::get('/deleteCookie',[cookieSessionController::class,'deleteCookie']);

Route::get('/sessionSet',[cookieSessionController::class,'sessionSet']);
Route::get('/sessionGet',[cookieSessionController::class,'sessionGet']);
Route::get('/sessionDelete',[cookieSessionController::class,'sessionDelete']);
Route::get('/sessionResetAll',[cookieSessionController::class,'sessionResetAll']);
