<?php


use fize\crypt\Utf8;
use PHPUnit\Framework\TestCase;

class Utf8Test extends TestCase
{

    public function testDecode()
    {
        $str0 = '123456你好！';
        $str1 = Utf8::encode($str0);
        $str2 = Utf8::decode($str1);
        self::assertEquals($str0, $str2);
    }

    public function testEncode()
    {
        $str = '123456你好！';
        $str = Utf8::encode($str);
        var_dump($str);
        self::assertIsString($str);
    }
}
