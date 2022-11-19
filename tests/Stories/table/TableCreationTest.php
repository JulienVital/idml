<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Enums\TableDirectionOptions;
use Jvital\Idml\Stories\Table\Row;
use Jvital\Idml\Stories\Table\Table;
use PHPUnit\Framework\TestCase;

class TableCreationTest extends TestCase{

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
        $this->xmlExpect = file_get_contents(__DIR__.'/expects/TableExpect.xml');
    }

    public function testRowDeserializeSerializeIsSame(){

        $rowDeserialized = $this->serializer->deSerialize($this->xmlExpect, Table::class,'xml');
        $rowSerialized = $this->serializer->serialize($rowDeserialized, 'xml');

        $this->assertEquals($rowSerialized, $this->xmlExpect);
    }

    public function testHeaderRowCount(){

        $table = new Table();
        $table->setHeaderRowCount(2);
        $tableSerialized = $this->serializer->serialize($table, 'xml');
        $tableDeserialized = $this->serializer->deSerialize($tableSerialized, Table::class,'xml');

        $this->assertEquals($tableDeserialized->getHeaderRowCount(), 2);
    }

    public function testAppliedTableStyle(){

        $table = new Table();
        $table->setAppliedTableStyle("styleName");
        $tableSerialized = $this->serializer->serialize($table, 'xml');
        $tableDeserialized = $this->serializer->deSerialize($tableSerialized, Table::class,'xml');

        $this->assertEquals($tableDeserialized->getAppliedTableStyle(), "styleName");
    }

    public function testBodyRowCount(){

        $table = new Table();
        $table->setBodyRowCount(12);
        $tableSerialized = $this->serializer->serialize($table, 'xml');
        $tableDeserialized = $this->serializer->deSerialize($tableSerialized, Table::class,'xml');

        $this->assertEquals($tableDeserialized->getBodyRowCount(), 12);
    }

    public function testColumnCount(){

        $table = new Table();
        $table->setColumnCount(8);
        $tableSerialized = $this->serializer->serialize($table, 'xml');
        $tableDeserialized = $this->serializer->deSerialize($tableSerialized, Table::class,'xml');

        $this->assertEquals($tableDeserialized->getColumnCount(), 8);
    }

    public function testFooterRowCount(){

        $table = new Table();
        $table->setFooterRowCount(3);
        $tableSerialized = $this->serializer->serialize($table, 'xml');
        $tableDeserialized = $this->serializer->deSerialize($tableSerialized, Table::class,'xml');

        $this->assertEquals($tableDeserialized->getFooterRowCount(), 3);
    }

    public function testTableDirection(){

        $table = new Table();
        $table->setTableDirection(TableDirectionOptions::LEFT_TO_RIGHT_DIRECTION);
        $tableSerialized = $this->serializer->serialize($table, 'xml');
        $tableDeserialized = $this->serializer->deSerialize($tableSerialized, Table::class,'xml');

        $this->assertEquals($tableDeserialized->getTableDirection(), TableDirectionOptions::LEFT_TO_RIGHT_DIRECTION);

        $table->setTableDirection(TableDirectionOptions::RIGHT_TO_LEFT_DIRECTION);
        $tableSerialized = $this->serializer->serialize($table, 'xml');
        $tableDeserialized = $this->serializer->deSerialize($tableSerialized, Table::class,'xml');

        $this->assertEquals($tableDeserialized->getTableDirection(), TableDirectionOptions::RIGHT_TO_LEFT_DIRECTION);
    }
}