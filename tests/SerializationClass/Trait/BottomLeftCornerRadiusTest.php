<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Trait\BottomLeftCornerRadiusAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testBottomLeftCornerRadiusAttribute{
    use BottomLeftCornerRadiusAttribute;
}

Class BottomLeftCornerRadiusTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testBottomLeftCornerRadiusAttribute();

        $myClass->setBottomLeftCornerRadius(26);
        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result BottomLeftCornerRadius="26"/>';

        $result = $this->xmlIsSame($expectedXml, $xmlSerialized);
        $this->assertTrue($result);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result BottomLeftCornerRadius="12"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testBottomLeftCornerRadiusAttribute::class,'xml');

        $this->assertEquals($objectDeserialized->getBottomLeftCornerRadius(),12);
    }

}

