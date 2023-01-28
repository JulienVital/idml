<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Trait\TransformAttrLeftReferenceAttribute;

use Jvital\Tests\Helper\XmlTestCase;

Class testTransformAttrLeftReferenceAttributeTest{
    use TransformAttrLeftReferenceAttribute;
}

Class TransformAttrLeftReferenceTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testTransformAttrLeftReferenceAttributeTest();
        $myClass->setTransformAttrLeftReference("PageEdgeReference");

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result TransformAttrLeftReference="PageEdgeReference"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result TransformAttrLeftReference="PageEdgeReference"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testTransformAttrLeftReferenceAttributeTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getTransformAttrLeftReference(), "PageEdgeReference");
    }

}

