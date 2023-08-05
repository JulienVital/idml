<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

use Jvital\Idml\SerializationClass\Idml\Trait\SplitDocumentAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testSplitDocumentTest{
    use SplitDocumentAttribute;
}

Class SplitDocumentTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testSplitDocumentTest();
        $myClass->setSplitDocument(true);
        
        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result SplitDocument="true"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result SplitDocument="true"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testSplitDocumentTest::class,'xml');
    
        $this->assertTrue($objectDeserialized->isSplitDocument());
    }

    public function testSerializeToXmlFalse(){

        $myClass = new testSplitDocumentTest();
        $myClass->setSplitDocument(false);
        
        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result SplitDocument="false"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXmlFalse(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result SplitDocument="false"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testSplitDocumentTest::class,'xml');
    
        $this->assertFalse($objectDeserialized->isSplitDocument());
    }
}

