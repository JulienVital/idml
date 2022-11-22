<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Designmap\DocumentIdpkg;
use PHPUnit\Framework\TestCase;

class DesignmapTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
        $this->xmlExpect['deisgnmapExpect'] = file_get_contents(__DIR__.'/expects/deisgnmapExpect.xml');
    }

    public function testDeserializeSerializeIsSame(){

        $propertiesDeSerialized = $this->serializer->deSerialize($this->xmlExpect['deisgnmapExpect'], DocumentIdpkg::class,'xml');
        $propertiesSerialized = $this->serializer->serialize($propertiesDeSerialized, 'xml');

        $this->assertEquals($propertiesSerialized, $this->xmlExpect['deisgnmapExpect']);
    }
}