<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Trait\EndCapAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testEndCapAttribute{
    use EndCapAttribute;
}

Class EndCapTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testEndCapAttribute();

        $myClass->setEndCap('ButtEndCap');
        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result EndCap="ButtEndCap"/>';

        $result = $this->xmlIsSame($expectedXml, $xmlSerialized);
        $this->assertTrue($result);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result EndCap="ButtEndCap"/>';


        $objectDeserialized = $this->deSerialize($xmlFile, testEndCapAttribute::class,'xml');

        $this->assertEquals($objectDeserialized->getEndCap(),"ButtEndCap");
    }

}

