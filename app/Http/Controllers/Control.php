<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Req;
use App\User ;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Control extends Controller
{
    //

    public function index(Request $request){//all posts

    }
    public function show(Request $request,App\Post $post){//specific post
      
    }

}
