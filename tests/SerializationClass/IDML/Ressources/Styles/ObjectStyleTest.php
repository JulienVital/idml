<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Ressources\Styles\ObjectStyle;
use Jvital\Tests\Helper\XmlTestCase;

class ObjectStyleTest extends XmlTestCase{

    private $objectStyle;

    public function __construct(){
        parent::__construct();
        $this->objectStyle = file_get_contents(__DIR__.'/expects/ObjectStyle.xml');
    }

    public function testDeserializeSerializeIsSame(){

        $objectDeserialized = $this->deSerialize($this->objectStyle, ObjectStyle::class,'xml');
        $objectSerialized = $this->serialize($objectDeserialized, 'xml');

        $this->assertXmlStringEqualsXmlString($objectSerialized, $this->objectStyle);
    }

}