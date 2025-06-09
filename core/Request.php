<?php

namespace app\core;

class Request{
    public function getPath(){
       $path = $_SERVER['REQUEST_URI'] ?? "/";
       $patternUrl = "/MVC_Framework/i";
        if(preg_match($patternUrl, $path)==1){
            $path = substr_replace($path, "", 0, 14);
        };
       $postion =  strpos($path, '?');
       if ($postion === false){
        return $path;
       }
       $path = substr($path, 0, $postion);
       return $path;
    }

    public function getMethod(){
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

}