<?php
require_once __DIR__.'/../helper/ValidateLogin.php';
function LoginRequest(ValidateLogin $request) {
    if(!isset($request->username)) {
        throw new ValidateException("Username is null");
    } else if(!isset($request->password)) {
        throw new ValidateException("Password is null");
    } else if(trim($request->username) == "") {
        throw new Exception("Username is empty");
    } else if(trim($request->password) == "") {
        throw new Exception ("Password is Empty");
    }
}