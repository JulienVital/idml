<?php

use Jvital\Idml\SerializationClass\Ressources\Styles\FrameFittingOption;
use Jvital\Tests\Helper\XmlTestCase;

class FrameFittingOptionTest extends XmlTestCase{

    public function testAutoFitValue(){
        $valueTest = true;
        $anchoredObject = new FrameFittingOption();
        $anchoredObject->setAutoFit($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, FrameFittingOption::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->isAutoFit(), $valueTest);
    }

    public function testAutoFitValueFalse(){
        $valueTest = false;
        $anchoredObject = new FrameFittingOption();
        $anchoredObject->setAutoFit($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, FrameFittingOption::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->isAutoFit(), $valueTest);
    }

    public function testLeftCropValue(){
        $valueTest = 123;
        $anchoredObject = new FrameFittingOption();
        $anchoredObject->setLeftCrop($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, FrameFittingOption::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getLeftCrop(), $valueTest);
    }

    public function testTopCropValue(){
        $valueTest = 1234;
        $anchoredObject = new FrameFittingOption();
        $anchoredObject->setTopCrop($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, FrameFittingOption::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getTopCrop(), $valueTest);
    }

    public function testRightCropValue(){
        $valueTest = 1234;
        $anchoredObject = new FrameFittingOption();
        $anchoredObject->setRightCrop($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, FrameFittingOption::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getRightCrop(), $valueTest);
    }

    public function testBottomCropValue(){
        $valueTest = 1234;
        $anchoredObject = new FrameFittingOption();
        $anchoredObject->setBottomCrop($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, FrameFittingOption::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getBottomCrop(), $valueTest);
    }

    public function testFittingOnEmptyFrameValue(){
        $valueTest = "test fitting on empty value";
        $anchoredObject = new FrameFittingOption();
        $anchoredObject->setFittingOnEmptyFrame($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, FrameFittingOption::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getFittingOnEmptyFrame(), $valueTest);
    }

    public function testFittingAlignmentValue(){
        $valueTest = "test FittingAlignment value";
        $anchoredObject = new FrameFittingOption();
        $anchoredObject->setFittingAlignment($valueTest);

        $anchoredObjectSerialized = $this->serialize($anchoredObject, 'xml');
        $anchoredObjectDeserialized = $this->deSerialize($anchoredObjectSerialized, FrameFittingOption::class,'xml');

        $this->assertEquals($anchoredObjectDeserialized->getFittingAlignment(), $valueTest);
    }
}