<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Spread\FlattenerPreference;
use Jvital\Idml\Spread\RasterVectorBalance;
use PHPUnit\Framework\TestCase;

class RasterVectorBalanceTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testrasterVectorBalance(){

        $rasterVectorBalance = new RasterVectorBalance();

        $rasterVectorBalance->setType("double");
        $rasterVectorBalance->setValue("50");
        $rasterVectorBalanceSerialized = $this->serializer->serialize($rasterVectorBalance, 'xml');

        $rasterVectorBalanceDeSerialized = $this->serializer->deSerialize($rasterVectorBalanceSerialized, RasterVectorBalance::class,'xml');
        $this->assertEquals($rasterVectorBalanceDeSerialized->getType(), "double");
        $this->assertEquals($rasterVectorBalanceDeSerialized->getValue(), "50");
    }

}