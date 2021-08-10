<?php

$date = new DateTime();
// menetapkan waktu
$date->setTime(12, 12, 12, 121212);
// menetapkan tanggal
$date->setDate(2012, 12, 12);
var_dump($date);
// Menetapkan zona waktu
$date->setTimezone(new DateTimeZone("Asia/Makassar"));

var_dump($date);
// menambah waktu ke satu tahun
$interval = new DateInterval("P1D");
// mengurangi waktu ke satu tahun
$interval->invert = 1;

$date->add($interval);
var_dump($date);
// Monday, 9 August 2021
$waktu = $date->format("l, d F Y");
echo $waktu . PHP_EOL;

$parseDate = DateTime::createFromFormat("l, d-m-Y", "Monday, 09-08-2021", new DateTimeZone("Asia/Jakarta"));

var_dump($parseDate);
