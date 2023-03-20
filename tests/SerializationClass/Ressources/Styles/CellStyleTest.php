<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Ressources\Styles\CellStyle;
use Jvital\Idml\SerializationClass\Ressources\Styles\RootCellStyleGroup;
use Jvital\Tests\Helper\XmlTestCase;

class CellStyleTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;
    private $objectStyle;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
        $this->objectStyle = file_get_contents(__DIR__.'/expects/CellStyle.xml');
    }

    public function testDeserializeSerializeIsSame(){

        $objectDeserialized = $this->serializer->deSerialize($this->objectStyle, RootCellStyleGroup::class,'xml');
        $objectSerialized = $this->serializer->serialize($objectDeserialized, 'xml');

        $this->assertXmlStringEqualsXmlString($objectSerialized, $this->objectStyle);

    }

    public function testSelfValue(){
        $valueTest = "test self value";
        $cell = new CellStyle();
        $cell->setSelf($valueTest);

        $cellSerialized = $this->serializer->serialize($cell, 'xml');
        $cellDeserialized = $this->serializer->deSerialize($cellSerialized, CellStyle::class,'xml');

        $this->assertEquals($cellDeserialized->getSelf(), $valueTest);

    }

    public function testExtendedKeyboardShortcutValue(){
        $valueTest = "test extendedKeyboardShortcut value";
        $cell = new CellStyle();
        $cell->setExtendedKeyboardShortcut($valueTest);

        $cellSerialized = $this->serializer->serialize($cell, 'xml');
        $cellDeserialized = $this->serializer->deSerialize($cellSerialized, CellStyle::class,'xml');

        $this->assertEquals($cellDeserialized->getExtendedKeyboardShortcut(), $valueTest);

    }

    public function testTextTopInsetValue(){
        $valueTest = 33;
        $cell = new CellStyle();
        $cell->setTextTopInset($valueTest);

        $cellSerialized = $this->serializer->serialize($cell, 'xml');
        $cellDeserialized = $this->serializer->deSerialize($cellSerialized, CellStyle::class,'xml');

        $this->assertEquals($cellDeserialized->getTextTopInset(), $valueTest);

    }

    public function testTextLeftInsetValue(){
        $valueTest = 44;
        $cell = new CellStyle();
        $cell->setTextLeftInset($valueTest);

        $cellSerialized = $this->serializer->serialize($cell, 'xml');
        $cellDeserialized = $this->serializer->deSerialize($cellSerialized, CellStyle::class,'xml');

        $this->assertEquals($cellDeserialized->getTextLeftInset(), $valueTest);

    }

    public function testTextBottomInsetValue(){
        $valueTest = 22;
        $cell = new CellStyle();
        $cell->setTextBottomInset($valueTest);

        $cellSerialized = $this->serializer->serialize($cell, 'xml');
        $cellDeserialized = $this->serializer->deSerialize($cellSerialized, CellStyle::class,'xml');

        $this->assertEquals($cellDeserialized->getTextBottomInset(), $valueTest);

    }

    public function testTextRightInsetValue(){
        $valueTest = 11;
        $cell = new CellStyle();
        $cell->setTextRightInset($valueTest);

        $cellSerialized = $this->serializer->serialize($cell, 'xml');
        $cellDeserialized = $this->serializer->deSerialize($cellSerialized, CellStyle::class,'xml');

        $this->assertEquals($cellDeserialized->getTextRightInset(), $valueTest);

    }

    public function testTopInsetValue(){
        $valueTest = 111;
        $cell = new CellStyle();
        $cell->setTopInset($valueTest);

        $cellSerialized = $this->serializer->serialize($cell, 'xml');
        $cellDeserialized = $this->serializer->deSerialize($cellSerialized, CellStyle::class,'xml');

        $this->assertEquals($cellDeserialized->getTopInset(), $valueTest);

    }

    public function testLeftInsetValue(){
        $valueTest = 222;
        $cell = new CellStyle();
        $cell->setLeftInset($valueTest);

        $cellSerialized = $this->serializer->serialize($cell, 'xml');
        $cellDeserialized = $this->serializer->deSerialize($cellSerialized, CellStyle::class,'xml');

        $this->assertEquals($cellDeserialized->getLeftInset(), $valueTest);

    }

    public function testBottomInsetValue(){
        $valueTest = 333;
        $cell = new CellStyle();
        $cell->setBottomInset($valueTest);

        $cellSerialized = $this->serializer->serialize($cell, 'xml');
        $cellDeserialized = $this->serializer->deSerialize($cellSerialized, CellStyle::class,'xml');

        $this->assertEquals($cellDeserialized->getBottomInset(), $valueTest);

    }

    public function testRightInsetValue(){
        $valueTest = 444;
        $cell = new CellStyle();
        $cell->setRightInset($valueTest);

        $cellSerialized = $this->serializer->serialize($cell, 'xml');
        $cellDeserialized = $this->serializer->deSerialize($cellSerialized, CellStyle::class,'xml');

        $this->assertEquals($cellDeserialized->getRightInset(), $valueTest);

    }

    public function testKeyboardShortcutValue(){
        $valueTest = "test KeyboardShortcut value";
        $cell = new CellStyle();
        $cell->setKeyboardShortcut($valueTest);

        $cellSerialized = $this->serializer->serialize($cell, 'xml');
        $cellDeserialized = $this->serializer->deSerialize($cellSerialized, CellStyle::class,'xml');

        $this->assertEquals($cellDeserialized->getKeyboardShortcut(), $valueTest);

    }

    public function testNameValue(){
        $valueTest = "test Name value";
        $cell = new CellStyle();
        $cell->setName($valueTest);

        $cellSerialized = $this->serializer->serialize($cell, 'xml');
        $cellDeserialized = $this->serializer->deSerialize($cellSerialized, CellStyle::class,'xml');

        $this->assertEquals($cellDeserialized->getName(), $valueTest);

    }

}