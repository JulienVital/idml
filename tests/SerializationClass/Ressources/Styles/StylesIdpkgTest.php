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

    
}