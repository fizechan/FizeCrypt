<?php


use fize\crypt\Base64;
use PHPUnit\Framework\TestCase;

class Base64Test extends TestCase
{

    public function testDecode()
    {
        $encode = 'MTIzNDU2';
        $this->assertEquals('123456', Base64::decode($encode));
    }

    public function testEncode()
    {
        $decode = '123456';
        $this->assertEquals('MTIzNDU2', Base64::encode($decode));
    }
}
