<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

use Jvital\Idml\SerializationClass\Idml\Trait\StrikeThroughWeightAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testStrikeThroughWeightAttributeTest{
    use StrikeThroughWeightAttribute;
}

Class StrikeThroughWeightTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testStrikeThroughWeightAttributeTest();
        $myClass->setStrikeThroughWeight(48.48);

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result StrikeThroughWeight="48.48"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result StrikeThroughWeight="12.899"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testStrikeThroughWeightAttributeTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getStrikeThroughWeight(), "12.899");
    }

}

