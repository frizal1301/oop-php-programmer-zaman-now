<?php

require_once 'Exception/ValidateException.php';
require_once 'import/LoginRequest.php';
require_once 'helper/ValidateLogin.php';

$login = new ValidateLogin();
$login->username = "";
$login->password = "Ical";

try {
    LoginRequest($login);
    echo "VALID!!!" . PHP_EOL;
} catch(ValidateException | Exception $exception) {
    echo "Error: {$exception->getMessage()}" . PHP_EOL;
    // getrace digunakan untuk menampilkan direktori file yang error, baris keberapa, function apa dan argumentnya
    var_dump($exception->getTrace());
    // echo $exception->getTraceAsString();
    // finally adalah blok yang akan dieksekusi meskipun tidak terjadi error ataupun error
} finally {
    echo "Error Tidak Error tetap akan dieksekusi" . PHP_EOL;
}