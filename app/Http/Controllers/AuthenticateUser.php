<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthenticateUser extends Controller
{
  /**
   * @param  Request 
   * @return Response
   */
  public function login (Request $request){
    $status="guest";
    $errors=[];

    $validator=Validator::make($request->all(),[
        'password'=>"required|max:20|min:10",
        'email'=>["required","max:20","min:10","email:rfc,dns",
        function ($attribute,$value,$fail){
             $exists=User::where('email',$request->input('email'))->get();
             if (!$exists) {
                  $fail(`You are not in our database`);
             }else{
                 Auth::login($exists);
             }
        }
    ]]);
    if(!Auth::check()) {
        if($validator->fails()){
            $errors=array_merge($errors,$validator->errors());
        }
    } else {
        $status="user";
    }
    return response()->json(
        [
          "status"=>$status,
          "errors"=>$errors
    ]);

  }
  /**
   * @param  Request 
   * @return Response
   */
  public function signup(Request $request)
  {
    $status="guest";
    $errors=[];
    if(!Auth::check()) {
        $validator=Validator::make($request->all(),[
            'email'=>"required|max:20|min:10",
            'name'=>"required|max:20|min:10",
            'password'=>"required|max:20|min:10"
        ]);
        $validator->after(function ($validator){
            $user=User::where('email',$request->input('email'));
            if($user){
                $validator->errors()->add('email','Пользователь с таким имейлом уже существует');
            }
        });
       
        if(!$validator->fails()){

            $new_user=User::firstOrNew([
                "email"=>$request->input('email'),
                "password"=>Hash::make($request->input('password')),
                "name"=>$request->input('name')
            ]);
            $new_user->save();
            Auth::login($new_user);
         }else{
             $errors=$validator->errors()->all();
         }
    
     }else {
         $status="user";
     }
     return response()->json(
        [
          "status"=>$status,
          "errors"=>$errors
       ]);
   }
  
}