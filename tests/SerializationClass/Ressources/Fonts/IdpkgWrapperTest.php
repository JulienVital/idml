<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Ressources\Fonts\FontIdpkg;
use PHPUnit\Framework\TestCase;

class IdpkgWrapperTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
        $this->xmlExpect['FontIdpkg'] = file_get_contents(__DIR__.'/expects/FontIdpkg.xml');
    }

    public function testDeserializeSerializeIsSame(){

        $fontDeSerialized = $this->serializer->deSerialize($this->xmlExpect['FontIdpkg'], FontIdpkg::class,'xml');
        $fontSerialized = $this->serializer->serialize($fontDeSerialized, 'xml');

        $this->assertEquals($fontSerialized, $this->xmlExpect['FontIdpkg']);
    }

    
}