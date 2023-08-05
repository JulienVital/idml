<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Enums\PageTransitionDirectionOptions;
use Jvital\Idml\SerializationClass\Idml\Enums\PageTransitionDurationOptions;
use Jvital\Idml\SerializationClass\Idml\Enums\PageTransitionTypeOptions;
use Jvital\Idml\SerializationClass\Spread\MarginPreference;
use Jvital\Idml\SerializationClass\Spread\Page;
use Jvital\Idml\SerializationClass\Spread\Spread;
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

    public function testMarginPreference(){

        $page = new Page("Page Testname");
        $marginPreference = new MarginPreference();
        $marginPreference->setColumnGutter(8);
        $page->setMarginPreference($marginPreference);

        $pageSerialized = $this->serializer->serialize($page, 'xml');
        $pageDeSerialized = $this->serializer->deSerialize($pageSerialized, Page::class,'xml');
        $this->assertEquals($pageDeSerialized->getMarginPreference(), $marginPreference);
    }
}