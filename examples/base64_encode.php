<?php
require_once "../vendor/autoload.php";

use fize\crypt\Base64;

$str = '123456';
$enstr = Base64::encode($str);
var_dump($enstr);  //MTIzNDU2