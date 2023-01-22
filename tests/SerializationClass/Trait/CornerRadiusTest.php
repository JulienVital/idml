<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Trait\CornerRadiusAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testCornerRadiusAttribute{
    use CornerRadiusAttribute;
}

Class CornerRadiusTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testCornerRadiusAttribute();

        $myClass->setCornerRadius(26);
        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result CornerRadius="26"/>';

        $result = $this->xmlIsSame($expectedXml, $xmlSerialized);
        $this->assertTrue($result);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result CornerRadius="12"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testCornerRadiusAttribute::class,'xml');

        $this->assertEquals($objectDeserialized->getCornerRadius(),12);
    }

}

