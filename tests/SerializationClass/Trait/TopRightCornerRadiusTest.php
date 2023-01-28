<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Trait\TopRightCornerRadiusAttribute;

use Jvital\Tests\Helper\XmlTestCase;

Class testTopRightCornerRadiusAttributeTest{
    use TopRightCornerRadiusAttribute;
}

Class TopRightCornerRadiusTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testTopRightCornerRadiusAttributeTest();
        $myClass->setTopRightCornerRadius(12.89);

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result TopRightCornerRadius="12.89"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result TopRightCornerRadius="87.32"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testTopRightCornerRadiusAttributeTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getTopRightCornerRadius(), 87.32);
    }

}

