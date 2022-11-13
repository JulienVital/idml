<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Spread\Spread;
use Jvital\Idml\Utils\Properties\PathGeometry;
use PHPUnit\Framework\TestCase;

class PathGeometryTest extends TestCase{

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
        $this->xmlExpect = file_get_contents(__DIR__.'/Expects/PathGeometry.xml');
    }

    public function testSerializeDeserialize(){
        $spreadDeSerialized = $this->serializer->deSerialize($this->xmlExpect, PathGeometry::class,'xml');

        $spreadSerialized = $this->serializer->serialize($spreadDeSerialized, 'xml');

        $this->assertEquals($spreadSerialized, $this->xmlExpect);
    }
    

}