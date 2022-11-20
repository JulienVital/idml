<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Ressources\Styles\StylesIdpkg;
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

        $fontDeSerialized = $this->serializer->deSerialize($this->xmlExpect['StylesIdpkg'], StylesIdpkg::class,'xml');
        $fontSerialized = $this->serializer->serialize($fontDeSerialized, 'xml');

        $this->assertEquals($fontSerialized, $this->xmlExpect['StylesIdpkg']);
    }

    
}