<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

/**
 * Замыкания могут также наследовать переменные из родительской области видимости. 
 * Любая подобная переменная должна быть объявлена в конструкции use. 
 * Начиная с PHP 7.1, эти переменные не должны включать superglobals, 
 * $this и переменные с теми же именами, что и параметры функции.
 * https://www.php.net/manual/ru/functions.anonymous.php
 */
class Signup 
{

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
            'username'=>"required|max:20|min:10",
            'password'=>"required|max:20|min:10"
        ]);

        $validator->after(function ($validator) use ($request){
            $user=User::where('email',$request->input('email'))->exists();
            if($user){
                $validator->errors()->add('email','Пользователь с таким имейлом уже существует');
            }
        });
       
        if(!$validator->fails()){

            $new_user=User::create([
                "email"=>$request->input('email'),
                "password"=>Hash::make($request->input('password')),
                "username"=>$request->input('username')
            ]);
            $new_user->save();
            Auth::login($new_user);
            $status="user";
         }else{
             $errors=$validator->errors()->all();
         }
    
     }else {
         $status="user";
     }
     
     return json_encode( ["status"=>$status, "errors"=>$errors]);

   }

  
    /**
   * @param  Request 
   * @return Response
   */
   public function csfr(Request $request){

         return response(json_encode(
            ["csrf"=>csrf_token()]
         ));
   }
}