<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Designmap\Designmap;
use PHPUnit\Framework\TestCase;

class CreateIdmlTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    function testCreation(){
        $this->assertTrue(true);
    }
}
