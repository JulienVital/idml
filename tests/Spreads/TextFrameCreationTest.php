<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Enums\ContentTypeOptions;
use Jvital\Idml\Properties\Properties;
use Jvital\Idml\Spread\KeyValuePair;
use Jvital\Idml\Spread\Label;
use Jvital\Idml\Spread\TextFrame;
use Jvital\Idml\Spread\TextFramePreference;
use PHPUnit\Framework\TestCase;

class TextFrameCreationTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testCreateTextFrame(){

        $textframe = new TextFrame("test Texframe");
        $textframeSerialized = $this->serializer->serialize($textframe, 'xml');

        $textFrameDeSerialized = $this->serializer->deSerialize($textframeSerialized, TextFrame::class,'xml');
        $this->assertEquals($textFrameDeSerialized->getSelf(), "test Texframe");
    }
    
    public function testParentStory(){

        $textframe = new TextFrame("test Texframe");
        $textframe->setParentStory('parentName');
        $textframeSerialized = $this->serializer->serialize($textframe, 'xml');

        $textFrameDeSerialized = $this->serializer->deSerialize($textframeSerialized, TextFrame::class,'xml');
        $this->assertEquals($textFrameDeSerialized->getParentStory(), "parentName");
    }

    public function testContentType(){

        $textframe = new TextFrame("test Texframe");
        $textframe->setContentType(ContentTypeOptions::TEXT_TYPE);
        $textframeSerialized = $this->serializer->serialize($textframe, 'xml');

        $textFrameDeSerialized = $this->serializer->deSerialize($textframeSerialized, TextFrame::class,'xml');
        $this->assertEquals($textFrameDeSerialized->getContentType(), ContentTypeOptions::TEXT_TYPE);

    }

    public function testLocked(){

        $textframe = new TextFrame("test Texframe");
        $textframe->setLocked(true);
        $textframeSerialized = $this->serializer->serialize($textframe, 'xml');

        $textFrameDeSerialized = $this->serializer->deSerialize($textframeSerialized, TextFrame::class,'xml');
        $this->assertTrue($textFrameDeSerialized->isLocked());

    }

    public function testAppliedObjectStyle(){

        $objectStyleName = 'ObjectStyle/$ID/[Normal Text Frame]';

        $textframe = new TextFrame("test Texframe");
        $textframe->setAppliedObjectStyle($objectStyleName);
        $textframeSerialized = $this->serializer->serialize($textframe, 'xml');
        $textFrameDeSerialized = $this->serializer->deSerialize($textframeSerialized, TextFrame::class,'xml');
        $this->assertEquals($textFrameDeSerialized->getAppliedObjectStyle(), $objectStyleName);

    }

    public function testLabel(){

        $labelValue = new KeyValuePair();
        $labelValue->setKey('testKey');
        $labelValue->setValue('testValue');
        $label = new Label();
        $label->setKeyValuePair($labelValue);
        $properties = new Properties();
        $properties->setLabel($label);

        $textframe = new TextFrame("test Texframe");
        $textframe->setProperties($properties);

        $textframeSerialized = $this->serializer->serialize($textframe, 'xml');
        $textFrameDeSerialized = $this->serializer->deSerialize($textframeSerialized, TextFrame::class,'xml');
        
        $this->assertEquals($textFrameDeSerialized->getProperties()->getLabel()->getKeyValuePair()->getKey(), 'testKey');
        $this->assertEquals($textFrameDeSerialized->getProperties()->getLabel()->getKeyValuePair()->getValue(), 'testValue');

    }

    public function testTextFramePreference(){

        $textFramePreference = new TextFramePreference();
        $textFramePreference->setTextColumnCount(1);
        $textFramePreference->setTextColumnFixedWidth(178.58267716535);
        $textFramePreference->setVerticalJustification("CenterAlign");
        $textFramePreference->setTextColumnMaxWidth(0);
        $textFramePreference->setAutoSizingType("HeightOnly" );
        $textFramePreference->setAutoSizingReferencePoint("TopCenterPoint");

        $textFramePreferenceSerialized = $this->serializer->serialize($textFramePreference, 'xml');

        $textFramePreferenceDeserialized = $this->serializer->deSerialize($textFramePreferenceSerialized, TextFramePreference::class,'xml');

        $this->assertEquals($textFramePreferenceDeserialized->getTextColumnCount(),1);
        $this->assertEquals($textFramePreferenceDeserialized->getTextColumnFixedWidth(),178.58267716535);
        $this->assertEquals($textFramePreferenceDeserialized->getVerticalJustification(),"CenterAlign");
        $this->assertEquals($textFramePreferenceDeserialized->getTextColumnMaxWidth(),0);
        $this->assertEquals($textFramePreferenceDeserialized->getAutoSizingType(),"HeightOnly" );
        $this->assertEquals($textFramePreferenceDeserialized->getAutoSizingReferencePoint(),"TopCenterPoint");
    }
}