<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Stories\Table\Column;
use PHPUnit\Framework\TestCase;

class ColumnCreationTest extends TestCase{

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
        $this->xmlExpect = file_get_contents(__DIR__.'/expects/ColumnExpect.xml');
    }

    public function testColumnDeserializeSerializeIsSame(){

        $columnDeserialized = $this->serializer->deSerialize($this->xmlExpect, Column::class,'xml');
        $columnSerialized = $this->serializer->serialize($columnDeserialized, 'xml');

        $this->assertEquals($columnSerialized, $this->xmlExpect);
    }

    public function testSingleColumnWidth(){

        $column = new Column();
        $column->setSingleColumnWidth("43.98");
        $columnSerialized = $this->serializer->serialize($column, 'xml');
        $columnDeserialized = $this->serializer->deSerialize($columnSerialized, Column::class,'xml');

        $this->assertEquals($columnDeserialized->getSingleColumnWidth(), "43.98");
    }
}