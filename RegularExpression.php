<?php
$matches = array();
// Regex adalah fitur yang digunakan untuk melakukan pencarian string pada php
$result = (bool) preg_match_all("/ical|Fahru|Rizal/i", "Fahru Rizal", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat|tilaco/i", "****", "Anjing, lu ini tilacomu");
var_dump($result);

$result = preg_split("/[\s,-]/", "Saya-Ical-Mahasiswa-UNM");
var_dump($result);