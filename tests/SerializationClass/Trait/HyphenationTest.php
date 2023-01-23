<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Trait\HyphenationAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testHyphenationAttribute{
    use HyphenationAttribute;
}

Class HyphenationTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testHyphenationAttribute();

        $myClass->setHyphenation(true);
        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result Hyphenation="true"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result Hyphenation="false"/>';


        $objectDeserialized = $this->deSerialize($xmlFile, testHyphenationAttribute::class,'xml');

        $this->assertFalse($objectDeserialized->isHyphenation());
    }

}

