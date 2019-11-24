<?php
require_once "../vendor/autoload.php";

use fize\crypt\Base64;

$encode = 'MTIzNDU2';
$str = Base64::decode($encode);
var_dump($str);  //123456