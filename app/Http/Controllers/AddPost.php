<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Posts;
class AddPost extends Controller
{
  /**
   * @param  Request 
   * @return Response
   */
    public function addpost(Request $request)
    {
       if(Auth::check()){
          $user=Auth::user();
          $file_path=App\Post::updateOrCreate(
            ['title'=>$request->title,"img"=>$request->img,"desc"=>$request->desc]
          );
       }else{

       }
    }
}
?>