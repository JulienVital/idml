<?php

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\EventDispatcher\EventDispatcher;
use Jvital\Idml\Builder\CustomSerializationSubscriber;
use Jvital\Idml\SerializationClass\Designmap\Designmap;
use Jvital\Tests\Helper\XmlTestCase;

class DesignmapTest extends XmlTestCase{


    private $xmlExpect;

    public function __construct(){
        parent::__construct();
        $this->xmlExpect['designmapExpect'] = file_get_contents(__DIR__.'/expects/designmapExpect.xml');
        $this->xmlExpect['IDMLdesignmapEmpty'] = file_get_contents(__DIR__.'/expects/IDMLdesignmapEmpty.xml');
    }

    public function testDeserializeSerializeIsSame(){

        $builder = SerializerBuilder::create();

        $builder->configureListeners(function(EventDispatcher $dispatcher) {
            $dispatcher->addSubscriber(new CustomSerializationSubscriber());
        });
        $serializer = $builder->build();

        $propertiesDeSerialized = $this->deSerialize($this->xmlExpect['designmapExpect'], Designmap::class,'xml');
        $propertiesSerialized = $serializer->serialize($propertiesDeSerialized, 'xml');

        $this->assertXmlStringEqualsXmlString($propertiesSerialized, $this->xmlExpect['designmapExpect']);
    }

    public function testStoryList(){
        $designmap = new Designmap();
        $designmap->setStoryList("u115 u12b u141 u157 u16d u1b3 u1cd u1e4 u1fb u212 u229 u97");

        $designmapSerialized = $this->serialize($designmap, 'xml');
        $designmapDeSerialized = $this->deSerialize($designmapSerialized, Designmap::class,'xml');

        $this->assertEquals($designmapDeSerialized->getStoryList(), 'u115 u12b u141 u157 u16d u1b3 u1cd u1e4 u1fb u212 u229 u97');
    }

    public function testEmptyDesignMap(){
        $designmap = new Designmap();

        $designmapSerialized = $this->serialize($designmap, 'xml');

        $this->assertEquals($designmapSerialized, $this->xmlExpect['IDMLdesignmapEmpty']);
    }
}