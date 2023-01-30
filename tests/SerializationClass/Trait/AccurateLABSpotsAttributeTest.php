<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

use Jvital\Idml\SerializationClass\Trait\AccurateLABSpotsAttribute;
use Jvital\Tests\Helper\XmlTestCase;

Class testAccurateLABSpotAttribute{
    use AccurateLABSpotsAttribute;
}

Class AccurateLABSpotsAttributeTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXmlFalse(){

        $myClass = new testAccurateLABSpotAttribute();
        $myClass->setAccurateLABSpots(false);

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result AccurateLABSpots="false"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testSerializeToXmTrue(){

        $myClass = new testAccurateLABSpotAttribute();
        $myClass->setAccurateLABSpots(true);

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result AccurateLABSpots="true"/>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }
    public function testDeserializeXmlFalse(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result AccurateLABSpots="false"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testAccurateLABSpotAttribute::class,'xml');
    
        $this->assertFalse($objectDeserialized->isAccurateLABSpots());
    }
    public function testDeserializeXmlTrue(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result AccurateLABSpots="true"/>';

        $objectDeserialized = $this->deSerialize($xmlFile, testAccurateLABSpotAttribute::class,'xml');
    
        $this->assertTrue($objectDeserialized->isAccurateLABSpots());
    }
}

