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

if(!function_exists('has_session')) {
    function has_session($var) {
        return isset($_SESSION[$var]);
    }
}

if(!function_exists('check_auth')) {
    function check_auth($redirect) {
        if(!has_session('logged_in')) {
            $redirect();
        }
    }
}