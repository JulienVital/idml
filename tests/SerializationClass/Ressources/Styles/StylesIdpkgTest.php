<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Ressources\Styles\StylesIdpkg;
use PHPUnit\Framework\TestCase;

class StylesIdpkgTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    private $xmlExpect;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
        $this->xmlExpect['StylesIdpkg'] = file_get_contents(__DIR__.'/expects/StylesIdpkg.xml');
    }

    public function testDeserializeSerializeIsSame(){

        $StyleDeSerialized = $this->serializer->deSerialize($this->xmlExpect['StylesIdpkg'], StylesIdpkg::class,'xml');
        $styleSerialized = $this->serializer->serialize($StyleDeSerialized, 'xml');

        $this->assertEquals($styleSerialized, $this->xmlExpect['StylesIdpkg']);
    }

    public function testDeserializeSerializeIsSameFull(){
        $fileLoaded= file_get_contents(__DIR__.'/expects/styles.xml');
        $styleDeSerialized = $this->serializer->deSerialize($fileLoaded, StylesIdpkg::class,'xml');
        $styleSerialized = $this->serializer->serialize($styleDeSerialized, 'xml');
        $this->assertEquals($styleSerialized, $fileLoaded);
    }
}