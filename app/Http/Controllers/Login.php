<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class Login 
{

  /**
   * @param  Request 
   * @return Response
   */
  public function loginUserPage(Request $request)
  {

    $status="guest";
    $errors=[];
    $urlDecoded=\collect($request->all())->map(function($values){
         return \urldecode($values);
    })->toArray();

    $validator=Validator::make($urlDecoded,
       ['password'=>"required|max:20|min:10",
        'email'=>["required","max:20","min:10","email:rfc,dns", ]]);

    $validator->after(function ($val) use ($urlDecoded,&$status,&$errors){

        $exists=User::where('email',$urlDecoded['email'])->doesntExist();

        if ($exists) {
             $val->errors()->add('email',`You are not in our database`);
             $errors[]='You are not in our database';
        }else{
             Auth::login($exists);
             $status="user";
        }

    });

    if(!Auth::check()) {
        if(!$validator->fails()){
            $status="user";
        }
    } else {
        $status="user";
    }

    return json_encode( ["status"=>$status, "errors"=>$errors]);
  }

}