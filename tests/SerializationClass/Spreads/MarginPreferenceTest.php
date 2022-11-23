<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Spread\MarginPreference;
use PHPUnit\Framework\TestCase;

class MarginPreferenceTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testTopValue(){

        $marginPreference = new MarginPreference();

        $marginPreference->setTop("28.34");
        $marginPreferenceSerialized = $this->serializer->serialize($marginPreference, 'xml');

        $marginPreferenceDeSerialized = $this->serializer->deSerialize($marginPreferenceSerialized, MarginPreference::class,'xml');
        $this->assertEquals($marginPreferenceDeSerialized->getTop(), "28.34");
    }

    public function testBottomValue(){

        $marginPreference = new MarginPreference();

        $marginPreference->setBottom("12.28");
        $marginPreferenceSerialized = $this->serializer->serialize($marginPreference, 'xml');

        $marginPreferenceDeSerialized = $this->serializer->deSerialize($marginPreferenceSerialized, MarginPreference::class,'xml');
        $this->assertEquals($marginPreferenceDeSerialized->getBottom(), "12.28");
    }
    
    public function testLeftValue(){

        $marginPreference = new MarginPreference();

        $marginPreference->setLeft("32");
        $marginPreferenceSerialized = $this->serializer->serialize($marginPreference, 'xml');

        $marginPreferenceDeSerialized = $this->serializer->deSerialize($marginPreferenceSerialized, MarginPreference::class,'xml');
        $this->assertEquals($marginPreferenceDeSerialized->getLeft(), "32");
    }

    public function testRightValue(){

        $marginPreference = new MarginPreference();

        $marginPreference->setRight("98.26");
        $marginPreferenceSerialized = $this->serializer->serialize($marginPreference, 'xml');

        $marginPreferenceDeSerialized = $this->serializer->deSerialize($marginPreferenceSerialized, MarginPreference::class,'xml');
        $this->assertEquals($marginPreferenceDeSerialized->getRight(), "98.26");
    }

    public function testColumnDirectionValue(){

        $marginPreference = new MarginPreference();

        $marginPreference->setColumnDirection("Horizontal");
        $marginPreferenceSerialized = $this->serializer->serialize($marginPreference, 'xml');

        $marginPreferenceDeSerialized = $this->serializer->deSerialize($marginPreferenceSerialized, MarginPreference::class,'xml');
        $this->assertEquals($marginPreferenceDeSerialized->getColumnDirection(), "Horizontal");
    }

    public function testColumnsPositionsValue(){

        $marginPreference = new MarginPreference();

        $marginPreference->setColumnsPositions("0 595.275590551");
        $marginPreferenceSerialized = $this->serializer->serialize($marginPreference, 'xml');

        $marginPreferenceDeSerialized = $this->serializer->deSerialize($marginPreferenceSerialized, MarginPreference::class,'xml');
        $this->assertEquals($marginPreferenceDeSerialized->getColumnsPositions(), "0 595.275590551");
    }

    public function testColumnCountValue(){

        $marginPreference = new MarginPreference();

        $marginPreference->setColumnCount(2);
        $marginPreferenceSerialized = $this->serializer->serialize($marginPreference, 'xml');

        $marginPreferenceDeSerialized = $this->serializer->deSerialize($marginPreferenceSerialized, MarginPreference::class,'xml');
        $this->assertEquals($marginPreferenceDeSerialized->getColumnCount(), 2);
    }

    public function testColumnGutterValue(){

        $marginPreference = new MarginPreference();

        $marginPreference->setColumnGutter(8);
        $marginPreferenceSerialized = $this->serializer->serialize($marginPreference, 'xml');

        $marginPreferenceDeSerialized = $this->serializer->deSerialize($marginPreferenceSerialized, MarginPreference::class,'xml');
        $this->assertEquals($marginPreferenceDeSerialized->getColumnGutter(), 8);
    }
}