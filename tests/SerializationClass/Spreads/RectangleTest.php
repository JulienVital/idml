<?php

use Jvital\Idml\SerializationClass\Spread\Rectangle;
use Jvital\Tests\Helper\XmlTestCase;

class RectangleTest extends XmlTestCase{



    public function testDeserializeSerializeIsSame(){
        $rectangleXml = file_get_contents(__DIR__.'/expects/Rectangle.xml');

        $rectangleDeSerialized = $this->deSerialize($rectangleXml, Rectangle::class,'xml');
        $rectangleSerialized = $this->serialize($rectangleDeSerialized, 'xml');

        $this->assertXmlStringEqualsXmlString($rectangleSerialized, $rectangleXml);
    }
}