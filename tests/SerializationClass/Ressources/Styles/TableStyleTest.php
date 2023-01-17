<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Ressources\Styles\RootTableStyleGroup;
use PHPUnit\Framework\TestCase;

class TableStyleTest  extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;
    private $tableStyle;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
        $this->tableStyle = file_get_contents(__DIR__.'/expects/TableStyle.xml');
    }

    public function testDeserializeSerializeIsSame(){

        $objectDeserialized = $this->serializer->deSerialize($this->tableStyle, RootTableStyleGroup::class,'xml');
        $objectSerialized = $this->serializer->serialize($objectDeserialized, 'xml');

        $this->assertEquals($objectSerialized, $this->tableStyle);
    }

}