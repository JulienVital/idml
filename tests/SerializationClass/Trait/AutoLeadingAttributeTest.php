<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

use Jvital\Idml\SerializationClass\Trait\AutoLeadingAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testAutoLeadingAttributeTest{
    use AutoLeadingAttribute;
}

Class AutoLeadingAttributeTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testAutoLeadingAttributeTest();
        $myClass->setAutoLeading(23);

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result AutoLeading="23"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result AutoLeading="39"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testAutoLeadingAttributeTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getAutoLeading(), "39");
    }

    public function testDeserializeXmlNullValue(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testAutoLeadingAttributeTest::class,'xml');
    
        $this->assertEquals($objectDeserialized->getAutoLeading(), null);
    }

    public function testSerializeToXmlNullValue(){

        $myClass = new testAutoLeadingAttributeTest();

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }
}

