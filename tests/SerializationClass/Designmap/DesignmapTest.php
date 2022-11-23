<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Designmap\DocumentIdpkg;
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

    public function testStoryList(){
        $designmap = new DocumentIdpkg();
        $designmap->setStoryList("u115 u12b u141 u157 u16d u1b3 u1cd u1e4 u1fb u212 u229 u97");

        $designmapSerialized = $this->serializer->serialize($designmap, 'xml');
        $designmapDeSerialized = $this->serializer->deSerialize($designmapSerialized, DocumentIdpkg::class,'xml');

        $this->assertEquals($designmapDeSerialized->getStoryList(), 'u115 u12b u141 u157 u16d u1b3 u1cd u1e4 u1fb u212 u229 u97');
    }
}