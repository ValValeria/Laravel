<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Req;
use App\User ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Login extends Controller
{
    public function index(Request $request){
        return view('login');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:20|min:5',
            'password' => 'required|max:10|min:5',
        ]);
        $this->request=$request;
        $validator->after(function ($validator) {
            if(Auth::attempt($this->request->only('email','password'))){
                Auth::login(User::where('email',$this->request->email)->first());
            }else{
                $validator->errors()->add('email', 'You are not in our database');
            }
         
        });
        
        if ($validator->fails()) {
            return    view('/login')
                        ->withErrors($validator->errors());
        }else{
            return redirect('/posts');
        }
    }
}