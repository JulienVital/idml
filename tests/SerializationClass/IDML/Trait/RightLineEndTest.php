<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

use Jvital\Idml\SerializationClass\Idml\Trait\RightLineEndAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testRightLineEndTest{
    use RightLineEndAttribute;
}

Class RightLineEndTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testRightLineEndTest();
        $myClass->setRightLineEnd('SimpleArrowHead');

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result RightLineEnd="SimpleArrowHead"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result RightLineEnd="None"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testRightLineEndTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getRightLineEnd(), "None");
    }

}

