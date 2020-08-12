<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use App\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Mime as M ;
use Illuminate\Support\Facades\Storage;

class Data
{

     public function show(Request $request,string $folder,string $filename)
     {
        $path=$folder.'/'.$filename;
        return $this->exists($path);
     }

     public function exists(string $path)
     { 
        try {
            
            if(Storage::disk("public")->exists($path)){
                $disk="public";
            }else if(Storage::disk("build")->exists($path)) {
                $disk="build";
            }else {
                return  response("",404);
            }
    
            $content=Storage::disk($disk)->get($path);
    
            return response($content)->header(
                    'Content-Type',M::mime(pathinfo($path,PATHINFO_EXTENSION))
            );

        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
     }
}
?>