<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Trait\FillColorAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testFillColorAttribute{
    use FillColorAttribute;
}

Class FillColorTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testFillColorAttribute();

        $myClass->setFillColor('Swatch/None');
        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result FillColor="Swatch/None"/>';

        $result = $this->xmlIsSame($expectedXml, $xmlSerialized);
        $this->assertTrue($result);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result FillColor="Swatch/None"/>';


        $objectDeserialized = $this->deSerialize($xmlFile, testFillColorAttribute::class,'xml');

        $this->assertEquals($objectDeserialized->getFillColor(),"Swatch/None");
    }

}

