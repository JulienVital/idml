<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Ressources\Fonts\Font;
use PHPUnit\Framework\TestCase;

class FontTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
        $this->xmlExpect['Font'] = file_get_contents(__DIR__.'/expects/Font.xml');
    }

    public function testDeserializeSerializeIsSame(){

        $fontDeSerialized = $this->serializer->deSerialize($this->xmlExpect['Font'], Font::class,'xml');
        $fontSerialized = $this->serializer->serialize($fontDeSerialized, 'xml');

        $this->assertEquals($fontSerialized, $this->xmlExpect['Font']);
    }

    
}