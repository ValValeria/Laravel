<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Validate as TrVal;
use App\User;
use Illuminate\Support\Facades\Hash;

class FormSignupLogin extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize()
    {
        return true;
    }

    public function messages(){
       
        $data=['email','password','name'];
        $b=[];
        $array=[
                'min'=>"Поле '{}' слишком короткое",
                'max'=>"Поле '{}' слишком длинное",
                'required'=>"Заполните все поля"
         ];
        foreach($data as $elem){
            foreach($array as $value=>$value2){
                $b[(string)($elem.'.'.$value)]=str_replace("{}",$elem,$value2);
             }
        }     
        return $b;
       
    }
    public function rules()
    {

        $array=[
            //
            'email'=>'required|max:30|min:6|email:rfc,dns',
            'password'=>'required|max:20|min:6'
        ];

        if(isset($this->name)){
            array_push($array,[ 'name'=>'required|max:20|min:5' ]);
        }
        return $array;
    }
    
    public function withValidator($validator){
      
        $validator->after(function ($validator) {

            $data=[
                'email'=>$this->email
            ];
            $auth=false;//login
            if($this->name){
                $data['name']=$this->name;
                
                $auth=true;//signup
            }
            
            $con=false;
            $user=false;
            print_r($data);
            foreach($data as $key=>$value){
                if (User::where($key,$value)->exists()) {
                    $con=true;
                    $user=User::where($key,$value);
                    break;
                }
            }
            if( $auth && $con){
                
                $validator->errors()->add('email','Ваше имя или имейл уже заняты');
            }else if(!$auth  && !$con){
                $validator->errors()->add('email','Мы не можем найти вас в базе данных');
            }else if($auth && !$con){
                if($user){
                    $user=User::create([
                        'email'=>$this->email,
                        'password'=>Hash::make($this->password),
                        'name'=>$this->name
                    ]);
                    Auth::login($user);
                }
                
            }
            
        });
    }
    
   
}
