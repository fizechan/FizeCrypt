<?php


use fize\crypt\Xml;
use PHPUnit\Framework\TestCase;

class XmlTest extends TestCase
{

    private $array = [
        'id' => 123456,
        'name' => '<br/>陈峰展<br/>',
        'value' => [
            'sex' => true,
            'age' => '29',
            'score' => [89, 60, 78, 45, 66]
        ]
    ];

    public function testEncode()
    {
        $string1 = Xml::encode($this->array);
        self::assertIsString($string1);
        echo $string1;
        return $string1;
    }

    /**
     * @depends testEncode
     * @param $string
     */
    public function testDecode($string)
    {
        $array = Xml::decode($string);
        self::assertEquals($array, $this->array);
    }
}
