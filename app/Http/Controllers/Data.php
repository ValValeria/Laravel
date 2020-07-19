<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Mime as M ;
use Illuminate\Support\Facades\Storage;

class Data
{

     public function show(Request $request,string $filename)
     {
        $path=`/public/${$folder}/${filename}`;
        return $this->exists($path);
     }

     public function exists(string $path)
     {
        if(Storage::disk('public')->exists($path)){
            $content=Storage::get($path);
            return response()->header([
                'Content-Type'=>M::mime(pathinfo($path,PATHINFO_EXTENSION))
            ]);
        }
        return  response("",404);
     }
}
?>