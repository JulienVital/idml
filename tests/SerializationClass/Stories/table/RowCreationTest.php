<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Stories\Table\Row;
use PHPUnit\Framework\TestCase;

class RowCreationTest extends TestCase{

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
        $this->xmlExpect = file_get_contents(__DIR__.'/expects/RowExpect.xml');
    }

    public function testRowDeserializeSerializeIsSame(){

        $rowDeserialized = $this->serializer->deSerialize($this->xmlExpect, Row::class,'xml');
        $rowSerialized = $this->serializer->serialize($rowDeserialized, 'xml');

        $this->assertEquals($rowSerialized, $this->xmlExpect);
    }

    public function testSingleRowWidth(){

        $row = new Row();
        $row->setSingleRowHeight("43.98");
        $rowSerialized = $this->serializer->serialize($row, 'xml');
        $rowDeserialized = $this->serializer->deSerialize($rowSerialized, Row::class,'xml');

        $this->assertEquals($rowDeserialized->getSingleRowHeight(), "43.98");
    }
}