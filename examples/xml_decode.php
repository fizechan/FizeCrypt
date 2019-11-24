<?php
require_once "../vendor/autoload.php";

use fize\crypt\Xml;

$array = [
    'id' => 123456,
    'name' => '<br/>陈峰展<br/>',
    'value' => [
        'sex' => true,
        'age' => '29',
        'score' => [89, 60, 78, 45, 66]
    ]
];

$string = Xml::encode($array);
$array = Xml::decode($string);
var_dump($array);