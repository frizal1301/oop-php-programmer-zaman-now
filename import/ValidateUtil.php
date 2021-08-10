<?php
require_once __DIR__.'/../helper/ValidateLogin.php';
class ValidateUtil {
    static function validate(ValidateLogin $request) {
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

    static function validateReflection($request) {
        // Mengambil class apa yang akan diambil
        $reflection = new ReflectionClass($request);
        // mengambil property dari class yang direquest
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach($properties as $property) {
            // jika property tidak diinisialisasi
            if(!$property->isInitialized($request)) {
                throw new ValidateException("$property->name is not set");
            // jika nilai property tidak ada
            } else if(is_null($property->getValue($request))) {
                throw new ValidateException("$property->name is null");
            // jika nilai property kosong
            } else if(trim($property->getValue($request)) == "") {
                throw new ValidateException("$property->name is empty");
            }
        }
    }
}
