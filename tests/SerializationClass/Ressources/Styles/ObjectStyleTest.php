<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Ressources\Styles\ObjectStyle;
use PHPUnit\Framework\TestCase;

class ObjectStyleTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;
    private $objectStyle;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
        $this->objectStyle = file_get_contents(__DIR__.'/expects/ObjectStyle.xml');
    }

    public function testDeserializeSerializeIsSame(){

        $objectDeserialized = $this->serializer->deSerialize($this->objectStyle, ObjectStyle::class,'xml');
        $objectSerialized = $this->serializer->serialize($objectDeserialized, 'xml');

        $this->assertEquals($objectSerialized, $this->objectStyle);
        $this->assertTrue(true);
    }

}