<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Properties\Properties;
use PHPUnit\Framework\TestCase;

class PropertiesTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
        $this->xmlExpect['Properties'] = file_get_contents(__DIR__.'/expects/propertiesExpect.xml');
    }

    public function testDeserializeSerializeIsSame(){

        $propertiesDeSerialized = $this->serializer->deSerialize($this->xmlExpect['Properties'], Properties::class,'xml');
        $propertiesSerialized = $this->serializer->serialize($propertiesDeSerialized, 'xml');

        $this->assertEquals($propertiesSerialized, $this->xmlExpect['Properties']);
    }

    
}