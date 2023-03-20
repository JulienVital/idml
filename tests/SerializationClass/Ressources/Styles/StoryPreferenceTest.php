<?php

use Jvital\Idml\SerializationClass\Ressources\Styles\StoryPreference;
use Jvital\Tests\Helper\XmlTestCase;

class StoryPreferenceTest extends XmlTestCase{

    public function testOpticalMarginSizeValue(){
        $valueTest = 123;
        $anchoredObject = new StoryPreference();
        $anchoredObject->setOpticalMarginSize($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, StoryPreference::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getOpticalMarginSize(), $valueTest);
    }

    public function testOpticalMarginAlignmentValue(){
        $valueTest = true;
        $anchoredObject = new StoryPreference();
        $anchoredObject->setOpticalMarginAlignment($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, StoryPreference::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->isOpticalMarginAlignment(), $valueTest);
    }

    public function testOpticalMarginAlignmentValueFalse(){
        $valueTest = false;
        $anchoredObject = new StoryPreference();
        $anchoredObject->setOpticalMarginAlignment($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, StoryPreference::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->isOpticalMarginAlignment(), $valueTest);
    }

    public function testFrameTypeValue(){
        $valueTest = "test FrameType value";
        $anchoredObject = new StoryPreference();
        $anchoredObject->setFrameType($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, StoryPreference::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getFrameType(), $valueTest);
    }

    public function testStoryOrientationValue(){
        $valueTest = "test StoryOrientation value";
        $anchoredObject = new StoryPreference();
        $anchoredObject->setStoryOrientation($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, StoryPreference::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getStoryOrientation(), $valueTest);
    }

    public function testStoryDirectionValue(){
        $valueTest = "test StoryDirection value";
        $anchoredObject = new StoryPreference();
        $anchoredObject->setStoryDirection($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, StoryPreference::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getStoryDirection(), $valueTest);
    }
}