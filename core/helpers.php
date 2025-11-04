<?php

if(!function_exists('set_controller_method')) {
    function set_controller_method($controller, $method) {
        $ctrl = new $controller;
        $ctrl->$method(); 
    }
}

if(!function_exists('dd')) {
    function dd($data) {
        echo"<pre>";
        echo var_dump($data);
        echo"</pre>";
        exit;
    }
}