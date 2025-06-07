<?php

namespace app\core;

class Router{
    protected $routes = [];
    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }
    
    public function resolve(){
        $path = $_SERVER['REQUEST_URI'] ?? "/";

        

    }
    
}