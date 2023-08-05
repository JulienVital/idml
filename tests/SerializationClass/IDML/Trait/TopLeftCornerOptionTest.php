<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Trait\TopLeftCornerOptionAttribute;

use Jvital\Tests\Helper\XmlTestCase;

Class testtopLeftCornerOptionAttributeTest{
    use TopLeftCornerOptionAttribute;
}

Class TopLeftCornerOptionTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testtopLeftCornerOptionAttributeTest();
        $myClass->settopLeftCornerOption("RoundedCorner");

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result TopLeftCornerOption="RoundedCorner"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result TopLeftCornerOption="BevelCorner"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testtopLeftCornerOptionAttributeTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->gettopLeftCornerOption(), "BevelCorner");
    }

}

