<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Req;
use App\User ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SignUp extends Controller
{
    //

    public function index(Request $request){
      
      return view('signup');
    }
    public function store(Request $request){

       $anonim=function ($attribute,$value,$fail){
          $user=User::where($attribute,$value)->exists();
          if($user){
              $fail(" Ваш :attribute уже занят");
          }
       };
       $validator=Validator::make($request->all(),[
           'email'=>[
             'required','max:30','min:6',
              $anonim
           ],
           'name'=>[
            'required','max:30','min:6',
            $anonim
           ],
           'password'=>[
             'required','max:30','min:6',
           ]
       ]);
       if($validator->fails()){
          return  view('signup')->withErrors($validator);
       }
       $newuser=new User();
       $newuser->email=$request->input('email');
       $newuser->password=Hash::make($request->input('password'));
       $newuser->name=$request->input('name');
       $newuser->save();
       Auth::login($newuser);
       return redirect('/auth/'.$newuser->id);
       
    }
    public function logout(Request $request){
      Auth::logout();
      return redirect('/');
    }

}
