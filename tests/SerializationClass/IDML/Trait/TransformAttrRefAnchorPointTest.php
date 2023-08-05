<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Trait\TransformAttrRefAnchorPointAttribute;

use Jvital\Tests\Helper\XmlTestCase;

Class testTransformAttrRefAnchorPointAttributeTest{
    use TransformAttrRefAnchorPointAttribute;
}

Class TransformAttrRefAnchorPointTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testTransformAttrRefAnchorPointAttributeTest();
        $myClass->setTransformAttrRefAnchorPoint("TopLeftAnchor");

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result TransformAttrRefAnchorPoint="TopLeftAnchor"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result TransformAttrRefAnchorPoint="TopLeftAnchor"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testTransformAttrRefAnchorPointAttributeTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getTransformAttrRefAnchorPoint(), "TopLeftAnchor");
    }

}

