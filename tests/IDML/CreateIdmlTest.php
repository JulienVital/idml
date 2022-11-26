<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Builder\IdmlDocument;
use Jvital\Idml\SerializationClass\Designmap\Designmap;
use PHPUnit\Framework\TestCase;

class CreateIdmlTest extends TestCase{



    public function __construct(){
        parent::__construct();
    }

    function testCreation(){
        $idml = new IdmlDocument();
    }
}
