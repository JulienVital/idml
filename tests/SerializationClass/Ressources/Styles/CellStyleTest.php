<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Ressources\Styles\RootCellStyleGroup;
use Jvital\Tests\Helper\XmlTestCase;
use PHPUnit\Framework\TestCase;

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

        $result = $this->xmlIsSame($objectSerialized, $this->objectStyle);

        $this->assertTrue($result);
    }

}