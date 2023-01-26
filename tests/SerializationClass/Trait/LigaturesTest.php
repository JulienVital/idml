<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

use Jvital\Idml\SerializationClass\Trait\LigaturesAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testLigaturesTest{
    use LigaturesAttribute;
}

Class LigaturesTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testLigaturesTest();
        $myClass->setLigatures(true);

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result Ligatures="true"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result Ligatures="true"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testLigaturesTest::class,'xml');
    
        $this->assertTrue($objectDeserialized->isLigatures());
    }

    public function testSerializeToXmlFalse(){

        $myClass = new testLigaturesTest();
        $myClass->setLigatures(false);

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result Ligatures="false"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXmlFalse(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result Ligatures="false"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testLigaturesTest::class,'xml');
    
        $this->assertFalse($objectDeserialized->isLigatures());
    }
}

