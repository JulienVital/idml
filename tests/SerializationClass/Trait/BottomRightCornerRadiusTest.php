<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Trait\BottomRightCornerRadiusAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testBottomRightCornerRadiusAttribute{
    use BottomRightCornerRadiusAttribute;
}

Class BottomRightCornerRadiusTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testBottomRightCornerRadiusAttribute();

        $myClass->setBottomRightCornerRadius(26);
        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result BottomRightCornerRadius="26"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result BottomRightCornerRadius="12"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testBottomRightCornerRadiusAttribute::class,'xml');

        $this->assertEquals($objectDeserialized->getBottomRightCornerRadius(),12);
    }

}

