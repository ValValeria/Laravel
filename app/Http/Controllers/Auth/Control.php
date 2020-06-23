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
class Control extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index(Request $request){//admin panel
      return view('auth.adminPanel');

    }
    public function show(Request $request){//add user or a post
      
    }
    public function showusers(Request $request){//profiles of all users
        
    }

}
