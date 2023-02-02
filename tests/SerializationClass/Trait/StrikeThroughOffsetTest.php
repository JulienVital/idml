<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

use Jvital\Idml\SerializationClass\Trait\StrikeThroughOffsetAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testStrikeThroughOffsetAttributeTest{
    use StrikeThroughOffsetAttribute;
}

Class StrikeThroughOffsetTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testStrikeThroughOffsetAttributeTest();
        $myClass->setStrikeThroughOffset(23.23);

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result StrikeThroughOffset="23.23"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result StrikeThroughOffset="39.9"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testStrikeThroughOffsetAttributeTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getStrikeThroughOffset(), "39.9");
    }

}

