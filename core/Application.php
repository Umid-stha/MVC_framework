<?php

namespace app\core;

class Application
{
    public Router $router;

    public function __constructor(){
        $this -> router = new Router();
    }

    public function run(){
        $this -> router -> resolve();
    }
}