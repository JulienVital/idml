<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Trait\TransformAttrTopReferenceAttribute;

use Jvital\Tests\Helper\XmlTestCase;

Class testTransformAttrTopReferenceAttributeTest{
    use TransformAttrTopReferenceAttribute;
}

Class TransformAttrTopReferenceTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testTransformAttrTopReferenceAttributeTest();
        $myClass->setTransformAttrTopReference("PageEdgeReference");

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result TransformAttrTopReference="PageEdgeReference"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result TransformAttrTopReference="PageEdgeReference"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testTransformAttrTopReferenceAttributeTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getTransformAttrTopReference(), "PageEdgeReference");
    }

}

