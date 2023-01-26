<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

use Jvital\Idml\SerializationClass\Trait\StrokeWeightAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testStrokeWeightAttributeTest{
    use StrokeWeightAttribute;
}

Class StrokeWeightAttributeTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testStrokeWeightAttributeTest();
        $myClass->setStrokeWeight(98.25);

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result StrokeWeight="98.25"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result StrokeWeight="21.789"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testStrokeWeightAttributeTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getStrokeWeight(), 21.789);
    }

}

