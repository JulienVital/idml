<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Properties\Value\BaselineFrameGridColor;
use Jvital\Idml\SerializationClass\Trait\BaselineFrameGridColorValue;
use Jvital\Tests\Helper\XmlTestCase;

Class testBaselineFrameGridColor{
    use BaselineFrameGridColorValue;
}

Class BaselineFrameGridColorTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $myClass = new testBaselineFrameGridColor();
        $color = new BaselineFrameGridColor();
        $color->setType("enumeration");
        $color->setValue("LightBlue");
        $myClass->setBaselineFrameGridColor($color);
        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result>
                <BaselineFrameGridColor type="enumeration">LightBlue</BaselineFrameGridColor>
            </result>';

        $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
            <result>
                <BaselineFrameGridColor type="enumeration">LightBlue</BaselineFrameGridColor>
            </result>';

        $objectDeserialized = $this->deSerialize($xmlFile, testBaselineFrameGridColor::class,'xml');
        $color = new BaselineFrameGridColor();
        $color->setType("enumeration");
        $color->setValue("LightBlue");
        $this->assertEquals($objectDeserialized->getBaselineFrameGridColor(), $color);
    }

}

