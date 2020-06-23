<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Req;
use App\User ;
use App\Post as Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class PostController extends Controller
{
    //

    public function index(Request $request){//all posts GET
        if($request->is('fonts/*')){
            return  response('',403);
        }
        return view('posts')->with('posts',Post::select('title','id')->limit(5)->get());
    }
    public function show(Request $request,Post $post){//specific post  GET
        return view('special_post')->with('post',$post);
    }
}
