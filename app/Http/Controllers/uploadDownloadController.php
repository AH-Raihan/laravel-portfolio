<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class uploadDownloadController extends Controller
{
   function onFileUp(Request $request){
        $path = $request->file('FileKey')->store('public');
        $result= DB::table('files')->insert(['path'=>$path]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
   }

   function onDownload($folderPath,$name){
       return Storage::download($folderPath.'/'.$name);
   }



   function FileList(){
       return DB::table('files')->get();
   }

   function onDelete($folderPath,$path){
       $totalPath=$folderPath.'/'.$path;
       Storage::delete($totalPath);
       DB::table('files')->where('path','=',$totalPath)->delete();

       return redirect('fileUpload');
   }
}
