<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Req;
use App\User ;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\RedirectResponse;
use App\Category as Cat;
class AddPost extends Controller
{
    public Request $request;
    public Array $categories;
    public $fields;
    public function __construct(){
        $this->categories=json_decode(file_get_contents(base_path().'/categories.json'));
    }
    public function index(Request $request){
        return view('auth.addPost',['categories'=>$this->categories]);
    }
    
    public function store(Request $request){
      
        $this->fields=['post-name','post-short-description','showcase-category','post-long-description','image-one','image-two','image-three','image-four'];
        $rules=[
            'post-name'=>'bail|required|max:70|min:5',
            'post-short-description'=>'required|max:100|min:10',
            'post-long-description'=>'required|max:1500|min:50',
            'image-one'=>'file|image|size:2000',
            'image-two'=>'file|image|size:2000',
            'image-three'=>'file|image|size:2000',
            'image-four'=>'file|image|size:2000'
        ];
        $validator=Validator($request->all(),$rules);

      
        if($request->isMethod('post') && $request->has(['post-name','post-short-description','post-long-description']) ){

            if($validator->fails()){

                return redirect('/auth/addpost')->withErrors($validator);
            }else{
                fwrite($file,'4');

                $this->createNewPost($request);
                return redirect('/auth/addpost')->withErrors($validator);
            }

            ////Everything is okk             
        }else{
            return redirect('/auth/addpost')->withErrors($validator);          
        }
    }
    private function createNewPost($request){
    
        $array=$request->all();
        $pathes=json_encode(iterator_to_array($this->gen()));
        $newpost=new Post;
        $newpost->title=$array['post-name'];
        $newpost->small_content=$array['post-short-description'];
        $newpost->content=$array['post-long-description'];
        $newpost->user_id=Auth::id();
        ///Categories
        $newpost->category_id= $this->installCat($request->input('cat'));

        $newpost->images=$pathes;
        $newpost->save();
    }
     
    private function installCat($categories){
        $intersection=array_intersect($this->categories,$categories);
        $array=array_combine($intersection,$intersection);
        $category=Cat::firstOrNew($array);
        return $category->id;
    }

    private function gen(){
        $names=['image-one','image-two','image-three','image-four'];
        foreach($names as $name){
             $extension=$this->request->file($name)->extension();
             $path=$this->request->file($name)->storeAs('images','image'.rand(0,100).'.'.$extension,'public');////?????
             yield $path;
        }
    }
}
