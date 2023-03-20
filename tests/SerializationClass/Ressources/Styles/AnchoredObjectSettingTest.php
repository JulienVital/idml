<?php

use Jvital\Idml\SerializationClass\Ressources\Styles\AnchoredObjectSetting;
use Jvital\Tests\Helper\XmlTestCase;

class AnchoredObjectSettingTest extends XmlTestCase{

    public function testAnchoredPositionValue(){
        $valueTest = "test AnchoredPosition value";
        $anchoredObject = new AnchoredObjectSetting();
        $anchoredObject->setAnchoredPosition($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, AnchoredObjectSetting::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getAnchoredPosition(), $valueTest);
    }

    public function testSpineRelativeValue(){
        $valueTest = true;
        $anchoredObject = new AnchoredObjectSetting();
        $anchoredObject->setSpineRelative($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, AnchoredObjectSetting::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->isSpineRelative(), $valueTest);

    }

    public function testSpineRelativeValueFalse(){
        $valueTest = false;
        $anchoredObject = new AnchoredObjectSetting();
        $anchoredObject->setSpineRelative($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, AnchoredObjectSetting::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->isSpineRelative(), $valueTest);

    }

    public function testLockPositionValue(){
        $valueTest = true;
        $anchoredObject = new AnchoredObjectSetting();
        $anchoredObject->setLockPosition($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, AnchoredObjectSetting::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->isLockPosition(), $valueTest);

    }

    public function testLockPositionValueFalse(){
        $valueTest = false;
        $anchoredObject = new AnchoredObjectSetting();
        $anchoredObject->setLockPosition($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, AnchoredObjectSetting::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->isLockPosition(), $valueTest);

    }


    public function testPinPositionValue(){
        $valueTest = true;
        $anchoredObject = new AnchoredObjectSetting();
        $anchoredObject->setPinPosition($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, AnchoredObjectSetting::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->isPinPosition(), $valueTest);

    }

    public function testPinPositionValueFalse(){
        $valueTest = false;
        $anchoredObject = new AnchoredObjectSetting();
        $anchoredObject->setPinPosition($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, AnchoredObjectSetting::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->isPinPosition(), $valueTest);

    }

    public function testAnchorPointValue(){
        $valueTest = "test AnchorPoint value";
        $anchoredObject = new AnchoredObjectSetting();
        $anchoredObject->setAnchorPoint($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, AnchoredObjectSetting::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getAnchorPoint(), $valueTest);
    }

    public function testHorizontalAlignmentValue(){
        $valueTest = "test HorizontalAlignment value";
        $anchoredObject = new AnchoredObjectSetting();
        $anchoredObject->setHorizontalAlignment($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, AnchoredObjectSetting::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getHorizontalAlignment(), $valueTest);
    }

    public function testHorizontalReferencePointValue(){
        $valueTest = "test HorizontalReferencePoint value";
        $anchoredObject = new AnchoredObjectSetting();
        $anchoredObject->setHorizontalReferencePoint($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, AnchoredObjectSetting::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getHorizontalReferencePoint(), $valueTest);
    }

    public function testVerticalAlignmentValue(){
        $valueTest = "test VerticalAlignment value";
        $anchoredObject = new AnchoredObjectSetting();
        $anchoredObject->setVerticalAlignment($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, AnchoredObjectSetting::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getVerticalAlignment(), $valueTest);
    }

    public function testVerticalReferencePointValue(){
        $valueTest = "test VerticalReferencePoint value";
        $anchoredObject = new AnchoredObjectSetting();
        $anchoredObject->setVerticalReferencePoint($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, AnchoredObjectSetting::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getVerticalReferencePoint(), $valueTest);
    }

    public function testAnchorXoffsetValue(){
        $valueTest = 12;
        $anchoredObject = new AnchoredObjectSetting();
        $anchoredObject->setAnchorXoffset($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, AnchoredObjectSetting::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getAnchorXoffset(), $valueTest);
    }

    public function testAnchorYoffsetValue(){
        $valueTest = 22;
        $anchoredObject = new AnchoredObjectSetting();
        $anchoredObject->setAnchorYoffset($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, AnchoredObjectSetting::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getAnchorYoffset(), $valueTest);
    }

    public function testAnchorSpaceAboveValue(){
        $valueTest = 33;
        $anchoredObject = new AnchoredObjectSetting();
        $anchoredObject->setAnchorSpaceAbove($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, AnchoredObjectSetting::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getAnchorSpaceAbove(), $valueTest);
    }
}