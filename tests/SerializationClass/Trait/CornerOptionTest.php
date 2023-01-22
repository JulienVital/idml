<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Trait\CornerOptionAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testCornerOptionAttribute{
    use CornerOptionAttribute;
}

Class CornerOptionAttributeTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testCornerOptionAttribute();

        $myClass->setCornerOption('InsetCorner');
        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result CornerOption="InsetCorner"/>';

        $result = $this->xmlIsSame($expectedXml, $xmlSerialized);
        $this->assertTrue($result);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result CornerOption="InsetCorner"/>';


        $objectDeserialized = $this->deSerialize($xmlFile, testCornerOptionAttribute::class,'xml');

        $this->assertEquals($objectDeserialized->getCornerOption(),"InsetCorner");
    }

}

