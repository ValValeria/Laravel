<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class Cors
{

    private const headers=[
        "Access-Control-Allow-Origin"=>"*",
        "Access-Control-Request-Method"=>"POST,GET,OPTIONS",
        "Access-Control-Allow-Credentials"=>"true",
        "Access-Control-Max-Age"=>"86400",
        "Access-Control-Allow-Headers"=>"*",
        "Access-Control-Expose-Headers"=> '*'
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $auth=$this->getAuthHeader();

        if(is_object($auth)&& \property_exists($auth,'email')){
                $id=User::where('email',$auth->email)->first()->id;
                Auth::loginUsingId($id);
        }
        
        return $next($request)->withHeaders(self::headers);
    }
 
    /**
     * Finds the header, named 'Auth'
     * @return object|null
     */
    public function getAuthHeader()
    {
        try {
           $headers=\getallheaders()['Auth'] ?? '{}';
           $authData=\json_decode($headers);
           return $authData;
        } catch (\Throwable $th) {
           echo $th->getMessage();
           return [];
        }
    }
}
