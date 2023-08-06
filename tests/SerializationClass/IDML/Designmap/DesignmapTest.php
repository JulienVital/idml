<?php

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\EventDispatcher\EventDispatcher;
use Jvital\Idml\Builder\Maker\CustomSerializationSubscriber;
use Jvital\Idml\SerializationClass\Idml\Designmap\Designmap;
use Jvital\Idml\SerializationClass\Idml\Designmap\IdpkgSpread;
use Jvital\Idml\SerializationClass\Idml\Designmap\IdpkgStory;
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

        $documentDeSerialized = $this->deSerialize($this->xmlExpect['designmapExpect'], Designmap::class,'xml');
        $documentSerialized = $serializer->serialize($documentDeSerialized, 'xml');

        $this->assertXmlStringEqualsXmlString($this->xmlExpect['designmapExpect'],$documentSerialized);
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

    public function testWrapperSpread(){
        $wrapperSpread = new IdpkgSpread();
        $wrapperSpread->setSrc("test src");

        $wrapperSerialized = $this->serialize($wrapperSpread, 'xml');
        $wrapperDeSerialized = $this->deSerialize($wrapperSerialized, IdpkgSpread::class,'xml');

        $this->assertEquals($wrapperDeSerialized->getSrc(), "Spreads/Spread_test src.xml");
    }

    public function testWrapperStory(){
        $wrapperSpread = new IdpkgStory();
        $wrapperSpread->setSrc("test src");

        $wrapperSerialized = $this->serialize($wrapperSpread, 'xml');
        $wrapperDeSerialized = $this->deSerialize($wrapperSerialized, IdpkgStory::class,'xml');

        $this->assertEquals($wrapperDeSerialized->getSrc(), "test src");
    }

    public function testActiveLayer(){
        $wrapperSpread = new Designmap();
        $wrapperSpread->setActiveLayer("test ActiveLayer");

        $wrapperSerialized = $this->serialize($wrapperSpread, 'xml');
        $wrapperDeSerialized = $this->deSerialize($wrapperSerialized, Designmap::class,'xml');

        $this->assertEquals($wrapperDeSerialized->getActiveLayer(), "test ActiveLayer");
    }
}