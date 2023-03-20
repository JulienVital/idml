<?php
namespace Jvital\Tests\Helper;

use JMS\Serializer\EventDispatcher\EventDispatcher;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Builder\CustomSerializationSubscriber;
use PHPUnit\Framework\TestCase;

class XmlTestCase extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $builder = SerializerBuilder::create();

        $builder->configureListeners(function(EventDispatcher $dispatcher) {
            $dispatcher->addSubscriber(new CustomSerializationSubscriber());
        });
        $this->serializer = $builder->build();
    }

    protected function serialize($classToSerialize){
        return $this->serializer->serialize($classToSerialize, 'xml');
    }

    protected function deSerialize($stringTodeserialize, $className){
        return $this->serializer->deSerialize($stringTodeserialize, $className,'xml');
    }

}

