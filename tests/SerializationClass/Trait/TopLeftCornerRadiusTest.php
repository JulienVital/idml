<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Trait\TopLeftCornerRadiusAttribute;

use Jvital\Tests\Helper\XmlTestCase;

Class testTopLeftCornerRadiusAttributeTest{
    use TopLeftCornerRadiusAttribute;
}

Class TopLeftCornerRadiusTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testTopLeftCornerRadiusAttributeTest();
        $myClass->setTopLeftCornerRadius(12.89);

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result TopLeftCornerRadius="12.89"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result TopLeftCornerRadius="87.32"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testTopLeftCornerRadiusAttributeTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getTopLeftCornerRadius(), 87.32);
    }

}

