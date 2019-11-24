<?php
require_once "../vendor/autoload.php";

use fize\crypt\Utf8;

$str0 = '123456你好！';
$str1 = Utf8::encode($str0);
var_dump($str1);
$str2 = Utf8::decode($str1);
var_dump($str2);