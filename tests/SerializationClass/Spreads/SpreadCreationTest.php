<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Enums\PageTransitionDirectionOptions;
use Jvital\Idml\SerializationClass\Enums\PageTransitionDurationOptions;
use Jvital\Idml\SerializationClass\Enums\PageTransitionTypeOptions;
use Jvital\Idml\SerializationClass\Spread\Spread;
use Jvital\Idml\SerializationClass\Spread\TextFrame;
use PHPUnit\Framework\TestCase;

class SpreadCreationTest extends TestCase{

    /**
     * @var string (xml)
     */
    protected $xmlExpect;

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
        $this->xmlExpect = file_get_contents(__DIR__.'/expects/SpreadIdpkgExpect.xml');
    }

    public function testGetSelfIdAfterSerialize(){

        $spread = new Spread("test");
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');

        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertEquals($spreadDeSerialized->getSelf(), "test");
    }
    
    public function testGetFlattenerOverridedAfterSerialize(){
        
        $spread = new Spread("test");

        // with default value
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertEquals($spreadDeSerialized->getFlattenerOverride(), "Default");

        // with set value
        $spread->setFlattenerOverride("flattenerOverride for test");

        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertEquals($spreadDeSerialized->getFlattenerOverride(), "flattenerOverride for test");
    }

    public function testGetAllowPageShuffleAfterSerialize(){
        
        $spread = new Spread("test");

        // with default value(true)
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertTrue($spreadDeSerialized->isAllowPageShuffle());

        // with false value
        $spread->setAllowPageShuffle(false);
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertFalse($spreadDeSerialized->isAllowPageShuffle());
    }

    public function testGetItemTransformAfterSerialize(){
        $itemTransform="1 0 0 10 0 0";
        $spread = new Spread("test");

        // with default value(null)
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertEquals($spreadDeSerialized->getItemTransform(),"1 0 0 1 0 0" );

        //with string value
        $spread->setItemTransform($itemTransform);
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertEquals($spreadDeSerialized->getItemTransform(),$itemTransform);
    }

    public function testGetShowMasterItemsAfterSerialize(){
        $spread = new Spread("test");

        // with default value(true)
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertTrue($spreadDeSerialized->isShowMasterItems());

        //with false value
        $spread->setShowMasterItems(false);
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertFalse($spreadDeSerialized->isShowMasterItems());
    }

    public function testGetPageCountAfterSerialize(){
        $spread = new Spread("test");

        //with 1 value
        $spread->setPageCount(8);
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertEquals($spreadDeSerialized->getPageCount(),8);
    }

    public function testGetBindingLocationAfterSerialize(){
        $spread = new Spread("test");

        // with default value(1)
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertEquals($spreadDeSerialized->getBindingLocation(),1);

        //with 0 value
        $spread->setBindingLocation(0);
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertEquals($spreadDeSerialized->getBindingLocation(),0);
    }

    
    public function testPageTransitionTypeAfterSerialize(){
        $spread = new Spread("test");

        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertEquals($spreadDeSerialized->getPageTransitionType(),PageTransitionTypeOptions::NONE);

        $spread->setPageTransitionType(PageTransitionTypeOptions::FADE_TRANSITION);
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertEquals($spreadDeSerialized->getPageTransitionType(),PageTransitionTypeOptions::FADE_TRANSITION);
    }

    public function testpageTransitionDirectionAfterSerialize(){
        $spread = new Spread("test");

        // with default value
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertEquals($spreadDeSerialized->getpageTransitionDirection(),PageTransitionDirectionOptions::NOT_APPLICABLE);

        $spread->setpageTransitionDirection(pageTransitionDirectionOptions::LEFT_TO_RIGHT);
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertEquals($spreadDeSerialized->getpageTransitionDirection(),pageTransitionDirectionOptions::LEFT_TO_RIGHT);
    }

    public function testPageTransitionDurationAfterSerialize(){
        $spread = new Spread("test");

        // with default value
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertEquals($spreadDeSerialized->getPageTransitionDuration(),PageTransitionDurationOptions::MEDIUM);

        $spread->setPageTransitionDuration(PageTransitionDurationOptions::SLOW);
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertEquals($spreadDeSerialized->getPageTransitionDuration(),PageTransitionDurationOptions::SLOW);
    }

    public function testTextFrame(){
        $spread = new Spread("test");
        $textFrame = new TextFrame('name');
        $spread->setTextFrame($textFrame);

        $spreadSerialized = $this->serializer->serialize($spread, 'xml');
        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, Spread::class,'xml');
        $this->assertEquals($spreadDeSerialized->getTextFrame(),$textFrame);
    }
}