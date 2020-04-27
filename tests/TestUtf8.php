<?php


use fize\crypt\Utf8;
use PHPUnit\Framework\TestCase;

class TestUtf8 extends TestCase
{

    public function testDecode()
    {
        $str0 = '123456你好！';
        $str1 = Utf8::encode($str0);
        var_dump($str1);
        $str2 = Utf8::decode($str1);
        var_dump($str2);
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
