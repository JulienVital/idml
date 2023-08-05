<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Trait\BottomRightCornerOptionAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testBottomRightCornerOptionAttribute{
    use BottomRightCornerOptionAttribute;
}

Class BottomRightCornerOptionAttributeTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testBottomRightCornerOptionAttribute();

        $myClass->setBottomRightCornerOption('test name CornerOption');
        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result BottomRightCornerOption="test name CornerOption"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result BottomRightCornerOption="test name CornerOption"/>';


        $objectDeserialized = $this->deSerialize($xmlFile, testBottomRightCornerOptionAttribute::class,'xml');

        $this->assertEquals($objectDeserialized->getBottomRightCornerOption(),"test name CornerOption");
    }

}

