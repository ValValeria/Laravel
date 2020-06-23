<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\User ;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __contruct(){
    }
   
    public function home(Request $request){
         return view('home');
    }
   
    public function mime($url){
     $mime1=['js'=>'text/js','css'=>'text/css'];
     $extension=pathinfo($url)['extension'];
     if(array_key_exists($extension,$mime1)){
          return $mime1[$extension];
     }
     return false;
    }
    public function findFile(Request $request ){
      
      $mime=$this->mime($request->path());
      
      if( $request->is('fonts/*') || strstr($request->url(),'fonts')!=false)
      {
         
         return response('Forbidden',403);

      }
      $headers = array(
          'cache-control: max-age=0',
          'upgrade-insecure-requests: 1',
          'user-agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.97 Safari/537.36',
          'sec-fetch-user: ?1',
          'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
          'x-compress: null',
          'sec-fetch-site: none',
          'sec-fetch-mode: navigate',
          'accept-encoding: deflate, br',
          'accept-language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7'
     );
      
     $ch = curl_init('https://liga-a.ru/portfolio/proleum/'.$request->path());
     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($ch, CURLOPT_HEADER, false);
     $html = curl_exec($ch);
     curl_close($ch);
     
     if(!$html) return response('',403);
     return response($html,200)->header('Content-Type',$mime);
    }
   
  }
