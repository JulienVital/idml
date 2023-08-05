<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Trait\UnderlineOffsetAttribute;

use Jvital\Tests\Helper\XmlTestCase;

Class testUnderlineOffsetAttributeTest{
    use UnderlineOffsetAttribute;
}

Class UnderlineOffsetTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testUnderlineOffsetAttributeTest();
        $myClass->setUnderlineOffset(12.89);

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result UnderlineOffset="12.89"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result UnderlineOffset="87.32"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testUnderlineOffsetAttributeTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getUnderlineOffset(), 87.32);
    }

}

