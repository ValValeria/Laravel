<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Posts;
use Illuminate\Http\Response;
class AddPost extends Controller
{
    protected const imageFolder='images';
    protected $response=["errors"=>[],"messages"=>[],"status"=>''];

  /**
   * @param  Request 
   * @return Response
   */
    public function addpost(Request $request)
    {
       if(Auth::check()){

          $validator=Validator::make($request->all(),[
              'title'=>"max:20|min:10|required",
              'img'=>"required|mimes:jpeg,bmp,png",
              'desc'=>"max:20|min:10|required",
          ]);
          
          if(!$validator->fails()){

            $user=Auth::user();

            $fileName=rand(0,200).`image.`.$request->img->extension();
  
            $file=$request->img->storeAs(self::imageFolder,$fileName,'public');
  
            $filePathPub="/public/".self::imageFolder."/".$fileName;
  
            $file_path=App\Posts::updateOrCreate(
              ['title'=>$request->title,"img"=>$filePathPub,"desc"=>$request->desc]
            );   

            $this->response['status']="Added";

          } else {
            array_push($this->response['errors'],'Invalid data');
          }
       }else{
        array_push($this->response['errors'],'Not authenticated');
       }

       return \json_encode($this->response);
    }

   /**
   * @param  Request 
   * @return Response
   */
    public function getPost(Request $request,string $title){
        $title=\urldecode($title);
        $post=App\Post::where('title',$title);
        if (!$post) {
            $this->response['errors'][]="The post doesn't exist";
            $this->response['status']="Not Found";
            $this->response['messages']['post']=$post;
            return response(\json_encode($this->response));
        }
    }

  
}
?>