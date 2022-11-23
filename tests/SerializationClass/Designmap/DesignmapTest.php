<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Designmap\Designmap;
use PHPUnit\Framework\TestCase;

class DesignmapTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
        $this->xmlExpect['designmapExpect'] = file_get_contents(__DIR__.'/expects/designmapExpect.xml');
        $this->xmlExpect['IDMLdesignmapEmpty'] = file_get_contents(__DIR__.'/expects/IDMLdesignmapEmpty.xml');
    }

    public function testDeserializeSerializeIsSame(){

        $propertiesDeSerialized = $this->serializer->deSerialize($this->xmlExpect['designmapExpect'], Designmap::class,'xml');
        $propertiesSerialized = $this->serializer->serialize($propertiesDeSerialized, 'xml');

        $this->assertEquals($propertiesSerialized, $this->xmlExpect['designmapExpect']);
    }

    public function testStoryList(){
        $designmap = new Designmap();
        $designmap->setStoryList("u115 u12b u141 u157 u16d u1b3 u1cd u1e4 u1fb u212 u229 u97");

        $designmapSerialized = $this->serializer->serialize($designmap, 'xml');
        $designmapDeSerialized = $this->serializer->deSerialize($designmapSerialized, Designmap::class,'xml');

        $this->assertEquals($designmapDeSerialized->getStoryList(), 'u115 u12b u141 u157 u16d u1b3 u1cd u1e4 u1fb u212 u229 u97');
    }

    public function testEmptyDesignMap(){
        $designmap = new Designmap();

        $designmapSerialized = $this->serializer->serialize($designmap, 'xml');

        $this->assertEquals($designmapSerialized, $this->xmlExpect['IDMLdesignmapEmpty']);
    }
}