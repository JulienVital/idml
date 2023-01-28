<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Trait\UnderlineWeightAttribute;

use Jvital\Tests\Helper\XmlTestCase;

Class testUnderlineWeightAttributeTest{
    use UnderlineWeightAttribute;
}

Class UnderlineWeightTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testUnderlineWeightAttributeTest();
        $myClass->setUnderlineWeight(12.89);

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result UnderlineWeight="12.89"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result UnderlineWeight="87.32"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testUnderlineWeightAttributeTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getUnderlineWeight(), 87.32);
    }

}

