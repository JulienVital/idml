<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

use Jvital\Idml\SerializationClass\Idml\Trait\StrokeColorAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testStrokeColorAttributeTest{
    use StrokeColorAttribute;
}

Class StrokeColorTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testStrokeColorAttributeTest();
        $myClass->setStrokeColor("Swatch/None");

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result StrokeColor="Swatch/None"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result StrokeColor="Swatch/None"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testStrokeColorAttributeTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getStrokeColor(), "Swatch/None");
    }

}

