<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

use Jvital\Idml\SerializationClass\Trait\AppliedParagraphStyleAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testAttribute{
    use AppliedParagraphStyleAttribute;
}

Class AppliedParagraphStyleAttributeTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testAttribute();
        $myClass->setAppliedParagraphStyle('example');

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result AppliedParagraphStyle="example"/>';

        $result = $this->xmlIsSame($expectedXml, $xmlSerialized);
        $this->assertTrue($result);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result AppliedParagraphStyle="example"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testAttribute::class,'xml');
    
        $this->assertEquals($objectDeserialized->getAppliedParagraphStyle(), "example");
    }
}

