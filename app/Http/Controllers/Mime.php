<?php
namespace App\Http\Controllers;
class Mime{
        public static function mime(string $type){
            $array=[
                "svg"=>"image/svg+xml",
                "png"=>"image/png",
                "jpg"=>"image/jpeg",
                "js"=>'text/js',
                "css"=>"text/css",
                "map"=>"text/js"
              ];
            if(array_key_exists($type,$array)) return $array[$type];
            else throw new InvalidArgumentException();
        }
    }

?>