<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Trait\TopRightCornerOptionAttribute;

use Jvital\Tests\Helper\XmlTestCase;

Class testTopRightCornerOptionAttributeTest{
    use TopRightCornerOptionAttribute;
}

Class TopRightCornerOptionTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testTopRightCornerOptionAttributeTest();
        $myClass->setTopRightCornerOption("RoundedCorner");

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result TopRightCornerOption="RoundedCorner"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result TopRightCornerOption="BevelCorner"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testTopRightCornerOptionAttributeTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getTopRightCornerOption(), "BevelCorner");
    }

}

