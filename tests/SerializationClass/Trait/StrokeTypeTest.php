<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

use Jvital\Idml\SerializationClass\Trait\StrokeTypeAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testStrokeTypeAttributeTest{
    use StrokeTypeAttribute;
}

Class StrokeTypeTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testStrokeTypeAttributeTest();
        $myClass->setStrokeType('StrokeStyle/$ID/Solid');

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result StrokeType="StrokeStyle/$ID/Solid"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result StrokeType="StrokeStyle/$ID/Solid"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testStrokeTypeAttributeTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getStrokeType(), 'StrokeStyle/$ID/Solid');
    }

}

