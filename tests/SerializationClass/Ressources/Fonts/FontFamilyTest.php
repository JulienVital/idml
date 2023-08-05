<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Ressources\Fonts\FontFamily;
use PHPUnit\Framework\TestCase;

class FontFamilyTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
        $this->xmlExpect['FontFamilyTest'] = file_get_contents(__DIR__.'/expects/FontFamily.xml');
    }

    public function testDeserializeSerializeIsSame(){

        $fontDeSerialized = $this->serializer->deSerialize($this->xmlExpect['FontFamilyTest'], FontFamily::class,'xml');
        $fontSerialized = $this->serializer->serialize($fontDeSerialized, 'xml');

        $this->assertEquals($fontSerialized, $this->xmlExpect['FontFamilyTest']);
    }

    
}