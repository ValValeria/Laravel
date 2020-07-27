<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Post as Post;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;


class AddPost 
{
    protected const imageFolder='images';
    protected $response=["errors"=>[],"messages"=>[],"status"=>''];
    protected const urls=[
      'post', 'posts','userPosts'
    ];
  /**
   * @param  Request 
   * @return Response
   */
    public function addPost(Request $request)
    {
          $response=Gate::inspect('create-post');

          if ($response->allowed()) {
            return $this->validate($request);
          } else {
            $this->response['errors'][]="You are not allowed to create posts ";
            return \json_encode($this->response);
          }
    }

    /**
     * Validate the input data
     * @param Request
     * @return string
     */
    public function validate(Request $request)
    {

    $validator=Validator::make($request->all(),[
        'title'=>"max:20|min:10|required",
        'img'=>"required|mimes:jpeg,bmp,png",
        'descr'=>"max:100|min:10|required",
    ]);

    $validator->after(function($val) use ($request){

       $existsPost=Post::where('title',$request->input('title'))->exists();

       if($existsPost){
         $val->errors()->add('email','Post with such title has already in our site');
       }
    });

    if(!$validator->fails()){

      $user=Auth::user();

      $random=strval(rand(0,300));

      $fileName="image$random.".$request->img->extension();

      Storage::disk('public')->putFileAs(
        self::imageFolder,$request->file('img'),$fileName
      );

      $filePathPub="/public/".self::imageFolder."/".$fileName;
       

      $newPost=Post::updateOrCreate(
        ['title'=>$request->title,"img"=>$filePathPub,"descr"=>$request->descr,"user_id"=>Auth::id()]
      );   
      
      $key=urlencode(self::urls[0]);

      Cache::store(
        'file'
      )->forever($key,$newPost);

      $this->response['status']="Added";
      $this->response['messages'][0]=["url"=>$filePathPub];

     } else {
      array_push($this->response['errors'],$validator->errors()->all());
     }

      return \json_encode($this->response);
  
    }

   /**
   * @param  Request 
   * @return Response
   */
    public function getPost(Request $request,string $title){

        $title=\urldecode($title);
        $key =self::urls[0].$title;
        $post=Cache::store('file')->get($key);

        if (!$post) {
          $post=Post::where('title',$title)->get()->load('user','user');
        } 
        
        if (!$post) {
            $this->response['errors'][]="The post doesn't exist";
            $this->response['status']="Not Found";
        }else {
            $this->response['messages'][0]=["posts"=>$post];
            Cache::store('file')->rememberForever($key,$post);
        }

        return response(\json_encode($this->response,JSON_UNESCAPED_UNICODE));

    }

    /**
   * @param  Request 
   * @return Response
   */
  public function getPosts(Request $request){

       $start=$request->query('start')??0;
       $key=self::urls[1].$start;

       if(Cache::store('file')->has($key)){         
         $posts=Cache::store('file')->get($key);
       } else{
         $posts=Post::all()->slice($start,3)->load('user','user')->values();
       }
       
       if (!count($posts->toArray())) {
           $this->response['status']="Not Found";
       }else{
          $this->response['messages'][0]=["posts"=>$posts];
          Cache::store('file')->forever($key,$posts);
       }

       return \json_encode($this->response,JSON_UNESCAPED_UNICODE);
   }

   /**
    * Deletes a post
   * @param  Request 
   * @return Response
   */
  public function updatePost(Request $request,$postTitle){

     Gate::authorize('create-post');

     $key=\urldecode($postTitle);

     $post = Post::where('title',$key);

     if(Auth::user()->can('deletePost',$post)){

       $this->response['status']="Added";

       $updated=$post->update($request->all());
    
       Cache::store(
         'file'
       )->forget('key');

       Cache::store('file')->add($key,$updated);

     } else {
       $this->response['errors'][]="You can't update this post";
     }

     return \json_encode($this->response);
  }

  /** In essence, the method returns the posts, created by specific user
   * @param  Request 
   * @return Response
   */
  public function getUserPosts(Request $request)
  {
    $start=$request->query('start') ?? 0;
    $posts=Post::where('user_id',Auth::id())->get()->slice($start,2);

    if (!count($posts->toArray())) {
        $this->response['status']="Not Found";
    }

    $this->response['messages']['posts']= json_encode($posts->values()->toArray(),JSON_UNESCAPED_UNICODE);
    
    return \json_encode($this->response);
  }


  public function searchPosts(Request $request){

    $search=$request->query('search');

    if($search){
     $postItems=Post::where('title','LIKE',"%$search%");
    
     if (!$postItems->first()) {

        $this->response['status']="Not Found";

     } else {

        $this->response['messages'][0]=['posts'=>$postItems->get()->slice(0,5)->load('user')->values()->toArray()];

     }
    }
    
    return \json_encode($this->response,JSON_UNESCAPED_UNICODE); 
  }

}
?>