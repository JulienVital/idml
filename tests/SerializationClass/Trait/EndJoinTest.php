<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Trait\EndJoinAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testEndJoinAttribute{
    use EndJoinAttribute;
}

Class EndJoinTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testEndJoinAttribute();

        $myClass->setEndJoin('MiterEndJoin');
        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result EndJoin="MiterEndJoin"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result EndJoin="MiterEndJoin"/>';


        $objectDeserialized = $this->deSerialize($xmlFile, testEndJoinAttribute::class,'xml');

        $this->assertEquals($objectDeserialized->getEndJoin(),"MiterEndJoin");
    }

}

