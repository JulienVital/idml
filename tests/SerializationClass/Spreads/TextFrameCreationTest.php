<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Enums\ContentTypeOptions;
use Jvital\Idml\SerializationClass\Idml\Properties\Properties;
use Jvital\Idml\SerializationClass\Spread\KeyValuePair;
use Jvital\Idml\SerializationClass\Spread\Label;
use Jvital\Idml\SerializationClass\Spread\TextFrame;
use Jvital\Idml\SerializationClass\Spread\TextFramePreference;
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
        $textFramePreference->setTextColumnGutter(12);
        $textFramePreference->setUseFixedColumnWidth(false);
        $textFramePreference->setFirstBaselineOffset("AscentOffset");
        $textFramePreference->setMinimumFirstBaselineOffset(32);
        $textFramePreference->setVerticalThreshold(62);
        $textFramePreference->setIgnoreWrap(false);
        $textFramePreference->setUseFlexibleColumnWidth(true);
        $textFramePreference->setVerticalBalanceColumns(true);
        $textFramePreference->setFootnotesEnableOverrides(false);
        $textFramePreference->setFootnotesSpanAcrossColumns(false);
        $textFramePreference->setColumnRuleOverprintOverride(true);
        $textFramePreference->setColumnRuleInsetChainOverride(true);
        $textFramePreference->setColumnRuleOverride(true);
        $textFramePreference->setUseNoLineBreaksForAutoSizing(true);
        $textFramePreference->setMinimumHeightForAutoSizing(true);
        $textFramePreference->setUseMinimumWidthForAutoSizing(true);
        $textFramePreference->setUseMinimumHeightForAutoSizing(true);

        $textFramePreferenceSerialized = $this->serializer->serialize($textFramePreference, 'xml');

        $textFramePreferenceDeserialized = $this->serializer->deSerialize($textFramePreferenceSerialized, TextFramePreference::class,'xml');

        $this->assertEquals($textFramePreferenceDeserialized->getTextColumnCount(),1);
        $this->assertEquals($textFramePreferenceDeserialized->getTextColumnFixedWidth(),178.58267716535);
        $this->assertEquals($textFramePreferenceDeserialized->getVerticalJustification(),"CenterAlign");
        $this->assertEquals($textFramePreferenceDeserialized->getTextColumnMaxWidth(),0);
        $this->assertEquals($textFramePreferenceDeserialized->getAutoSizingType(),"HeightOnly" );
        $this->assertEquals($textFramePreferenceDeserialized->getAutoSizingReferencePoint(),"TopCenterPoint");
        $this->assertEquals($textFramePreferenceDeserialized->getTextColumnGutter(),12);
        $this->assertEquals($textFramePreferenceDeserialized->isUseFixedColumnWidth(),false);
        $this->assertEquals($textFramePreferenceDeserialized->getFirstBaselineOffset(),"AscentOffset");
        $this->assertEquals($textFramePreferenceDeserialized->getMinimumFirstBaselineOffset(),32);
        $this->assertEquals($textFramePreferenceDeserialized->getVerticalThreshold(),62);
        $this->assertEquals($textFramePreferenceDeserialized->isIgnoreWrap(),false);
        $this->assertEquals($textFramePreferenceDeserialized->isUseFlexibleColumnWidth(),true);
        $this->assertEquals($textFramePreferenceDeserialized->isVerticalBalanceColumns(),true);
        $this->assertEquals($textFramePreferenceDeserialized->isFootnotesEnableOverrides(),false);
        $this->assertEquals($textFramePreferenceDeserialized->isFootnotesSpanAcrossColumns(),false);
        $this->assertEquals($textFramePreferenceDeserialized->isColumnRuleOverprintOverride(),true);
        $this->assertEquals($textFramePreferenceDeserialized->isColumnRuleInsetChainOverride(),true);
        $this->assertEquals($textFramePreferenceDeserialized->isColumnRuleOverride(),true);
        $this->assertEquals($textFramePreferenceDeserialized->isUseNoLineBreaksForAutoSizing(),true);
        $this->assertEquals($textFramePreferenceDeserialized->isUseMinimumWidthForAutoSizing(),true);
        $this->assertEquals($textFramePreferenceDeserialized->getMinimumHeightForAutoSizing(),true);
        $this->assertEquals($textFramePreferenceDeserialized->isUseMinimumHeightForAutoSizing(),true);
    }

    public function testTextFramePreference2(){

        $textFramePreference = new TextFramePreference();

        $textFramePreference->setMinimumWidthForAutoSizing(68);
        $textFramePreference->setColumnRuleOffset(38);
        $textFramePreference->setColumnRuleTopInset(98);
        $textFramePreference->setColumnRuleBottomInset(18);
        $textFramePreference->setColumnRuleStrokeWidth(63);
        $textFramePreference->setColumnRuleStrokeTint(73);
        $textFramePreference->setFootnotesMinimumSpacing(173);
        $textFramePreference->setFootnotesSpaceBetween(17);

        $textFramePreference->setColumnRuleStrokeColor("n");
        $textFramePreference->setColumnRuleStrokeType("n");



        $textFramePreferenceSerialized = $this->serializer->serialize($textFramePreference, 'xml');
        $textFramePreferenceDeserialized = $this->serializer->deSerialize($textFramePreferenceSerialized, TextFramePreference::class,'xml');

        $this->assertEquals($textFramePreferenceDeserialized->getMinimumWidthForAutoSizing(),68);
        $this->assertEquals($textFramePreferenceDeserialized->getColumnRuleOffset(),38);
        $this->assertEquals($textFramePreferenceDeserialized->getColumnRuleTopInset(),98);
        $this->assertEquals($textFramePreferenceDeserialized->getColumnRuleBottomInset(),18);
        $this->assertEquals($textFramePreferenceDeserialized->getColumnRuleStrokeWidth(),63);
        $this->assertEquals($textFramePreferenceDeserialized->getColumnRuleStrokeTint(),73);
        $this->assertEquals($textFramePreferenceDeserialized->getFootnotesMinimumSpacing(),173);
        $this->assertEquals($textFramePreferenceDeserialized->getFootnotesSpaceBetween(),17);

        $this->assertEquals($textFramePreferenceDeserialized->getColumnRuleStrokeColor(),"n");
        $this->assertEquals($textFramePreferenceDeserialized->getColumnRuleStrokeType(),"n");


    }
}