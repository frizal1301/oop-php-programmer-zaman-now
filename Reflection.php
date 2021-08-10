<?php

// Reflection adalah fitur pada php yang digunakan unutk membaca struktur kode pada saat aplikasi sedang berjalan

require_once 'Exception/ValidateException.php';
require_once 'helper/ValidateLogin.php';
require_once 'import/ValidateUtil.php';

$obj1 = new ValidateLogin;
$obj1->username = "Frizal";
$obj1->password = "RahasiaBumi";


ValidateUtil::validate($obj1);

class ValidateRegister {
    public ?string $name;
    public ?string $email;
    public ?string $password;
}

$obj2 = new ValidateRegister;
$obj2->name = "Fahru Rizal";
$obj2->email = "frizalichal01@gmail.com";
$obj2->password = "ical";

ValidateUtil::validateReflection($obj2);