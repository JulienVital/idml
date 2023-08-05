<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

use Jvital\Idml\SerializationClass\Idml\Trait\LeftLineEndAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testLeftLineEndTest{
    use LeftLineEndAttribute;
}

Class LeftLineEndTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testLeftLineEndTest();
        $myClass->setLeftLineEnd('SimpleWideArrowHead');

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result LeftLineEnd="SimpleWideArrowHead"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result LeftLineEnd="None"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testLeftLineEndTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getLeftLineEnd(), "None");
    }

}

