<?php


use fize\crypt\Enchant;
use PHPUnit\Framework\TestCase;

class EnchantTest extends TestCase
{

    public function testBrokerSetDictPath()
    {

    }

    public function testDictSuggest()
    {

    }

    public function testDictGetError()
    {

    }

    public function testDictAddToPersonal()
    {

    }

    public function testBrokerFreeDict()
    {

    }

    public function testBrokerGetDictPath()
    {

    }

    public function testBrokerListDicts()
    {

    }

    public function testDictQuickCheck()
    {

    }

    public function testBrokerSetOrdering()
    {

    }

    public function testBrokerGetError()
    {

    }

    public function testDictAddToSession()
    {

    }

    public function testBrokerFree()
    {

    }

    public function testDictCheck()
    {

    }

    public function testBrokerInit()
    {
        $enchant = new Enchant();
        $broker = $enchant->brokerInit();
        self::assertIsResource($broker);
    }

    public function testBrokerRequestDict()
    {
        $tag = 'en_US';

    }

    public function testBrokerRequestPwlDict()
    {

    }

    public function testDictIsInSession()
    {

    }

    public function testDictDescribe()
    {

    }

    public function testBrokerDescribe()
    {
        $enchant = new Enchant();
        $enchant->brokerInit();
        $describe = $enchant->brokerDescribe();
        var_dump($describe);
        self::assertIsArray($describe);
    }

    public function testBrokerDictExists()
    {
        $tag = 'ispell';
        $enchant = new Enchant();
        $enchant->brokerInit();
        $exists = $enchant->brokerDictExists($tag);
        var_dump($exists);
        self::assertTrue($exists);
    }

    public function testDictStoreReplacement()
    {

    }
}
