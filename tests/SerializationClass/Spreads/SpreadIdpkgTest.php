<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Spread\SpreadIdpkg;
use PHPUnit\Framework\TestCase;

class SpreadIdpkgTest extends TestCase{

    /**
     * @var string (xml)
     */
    protected $xmlExpect;

    /**
     * @var Serializer
     */
    private $serializer;

    protected function setUp():void
    {
        $this->xmlExpect = file_get_contents(__DIR__.'/expects/SpreadIdpkgExpect.xml');
    }

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }
    public function testDeserializeSerializeIsSame(){

        $spreadDeSerialized = $this->serializer->deSerialize($this->xmlExpect, SpreadIdpkg::class,'xml');
        $spreadSerialized = $this->serializer->serialize($spreadDeSerialized, 'xml');

        $this->assertEquals($spreadSerialized, $this->xmlExpect);
    }
}