<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Stories\Table\Cell;
use PHPUnit\Framework\TestCase;

class CellCreationTest extends TestCase{

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
        $this->xmlExpect = file_get_contents(__DIR__.'/expects/CellExpect.xml');
    }

    public function testCellDeserializeSerializeIsSame(){


        $cellDeserialized = $this->serializer->deSerialize($this->xmlExpect, Cell::class,'xml');
        $cellSerialized = $this->serializer->serialize($cellDeserialized, 'xml');

        $this->assertEquals($cellSerialized, $this->xmlExpect);
    }

    public function testAppliedCellStyleAttribute(){

        $cell = new Cell();
        $cell->setAppliedCellStyleAttribute("styleApplied");
        $cellSerialized = $this->serializer->serialize($cell, 'xml');
        $cellDeserialized = $this->serializer->deSerialize($cellSerialized, Cell::class,'xml');

        $this->assertEquals($cellDeserialized->getAppliedCellStyleAttribute(), 'styleApplied');
    }

    public function testColumnSpan(){

        $cell = new Cell();
        $cell->setColumnSpan(3);
        $cellSerialized = $this->serializer->serialize($cell, 'xml');
        $cellDeserialized = $this->serializer->deSerialize($cellSerialized, Cell::class,'xml');

        $this->assertEquals($cellDeserialized->getColumnSpan(), 3);
    }

    public function testRowSpan(){

        $cell = new Cell();
        $cell->setRowSpan(3);
        $cellSerialized = $this->serializer->serialize($cell, 'xml');
        $cellDeserialized = $this->serializer->deSerialize($cellSerialized, Cell::class,'xml');

        $this->assertEquals($cellDeserialized->getRowSpan(), 3);
    }

    public function testTextInset(){

        $cell = new Cell();
        $cell->setTextTopInset("23.56");
        $cell->setTextLeftInset("23.57");
        $cell->setTextBottomInset("23.58");
        $cell->setTextRightInset("23.59");
        $cellSerialized = $this->serializer->serialize($cell, 'xml');
        $cellDeserialized = $this->serializer->deSerialize($cellSerialized, Cell::class,'xml');

        $this->assertEquals($cellDeserialized->getTextTopInset(), "23.56");
        $this->assertEquals($cellDeserialized->getTextLeftInset(), "23.57");
        $this->assertEquals($cellDeserialized->getTextBottomInset(), "23.58");
        $this->assertEquals($cellDeserialized->getTextRightInset(), "23.59");
    }
}