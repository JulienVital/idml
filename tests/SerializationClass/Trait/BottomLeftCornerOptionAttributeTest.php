<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Trait\BottomLeftCornerOptionAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testBottomLeftCornerOptionAttribute{
    use BottomLeftCornerOptionAttribute;
}

Class BottomLeftCornerOptionAttributeTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testBottomLeftCornerOptionAttribute();

        $myClass->setBottomLeftCornerOption('test name CornerOption');
        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result BottomLeftCornerOption="test name CornerOption"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result BottomLeftCornerOption="test name CornerOption"/>';


        $objectDeserialized = $this->deSerialize($xmlFile, testBottomLeftCornerOptionAttribute::class,'xml');

        $this->assertEquals($objectDeserialized->getBottomLeftCornerOption(),"test name CornerOption");
    }

}

