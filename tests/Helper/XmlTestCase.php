<?php
namespace Jvital\Tests\Helper;

use DOMDocument;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

use PHPUnit\Framework\TestCase;
use SimpleXMLElement;

abstract class XmlTestCase extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    protected function serialize($classToSerialize){
        return $this->serializer->serialize($classToSerialize, 'xml');
    }

    protected function deSerialize($stringTodeserialize, $className){
        return $this->serializer->deSerialize($stringTodeserialize, $className,'xml');
    }

}

