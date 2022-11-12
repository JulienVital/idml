<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Enums\PageTransitionDirectionOptions;
use Jvital\Idml\Enums\PageTransitionDurationOptions;
use Jvital\Idml\Enums\PageTransitionTypeOptions;
use Jvital\Idml\Spread\Page;
use Jvital\Idml\Spread\Spread;
use PHPUnit\Framework\TestCase;

class PageCreationTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testGetSelfId(){

        $page = new Page("Page Testname");
        $pageSerialized = $this->serializer->serialize($page, 'xml');

        $pageDeSerialized = $this->serializer->deSerialize($pageSerialized, Page::class,'xml');
        $this->assertEquals($pageDeSerialized->getSelf(), "Page Testname");
    }
    
    public function testGeometricBound(){

        $page = new Page("Page Testname");
        $geometricBound= "0 0 841.889763778 595.275590551";
        $page->setGeometricBounds($geometricBound);
        $pageSerialized = $this->serializer->serialize($page, 'xml');

        $pageDeSerialized = $this->serializer->deSerialize($pageSerialized, Page::class,'xml');
        $this->assertEquals($pageDeSerialized->getGeometricBounds(), $geometricBound);
    }
}