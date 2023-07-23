<?php

use Jvital\Idml\Builder\Json\Loader;
use Jvital\Idml\JsonClass\Document;
use PHPUnit\Framework\TestCase;

class DocumentJsonTest extends TestCase{

    private Document $document;

    public function __construct(){
        parent::__construct();
        
        $loader = new Loader();
        $this->document = $loader->load(file_get_contents('tempJson'));
    }

    public function testDeserializeName(){

        $this->assertEquals($this->document->getName(), "Current Document test");
    }

    public function testDeserializeDocumentProperties(){

        $this->assertEquals($this->document->getProperties()->getBackgroundColor(), "#ffffff");
        $this->assertEquals($this->document->getProperties()->getWidth(), 210);
        $this->assertEquals($this->document->getProperties()->getHeight(), 290);
        $this->assertEquals($this->document->getProperties()->getMeasurementUnit(), "mm");
    }

    public function testDeserializeDocumentStyles(){
        $styles = $this->document->getStyles();
        $this->assertEquals(count($styles), 4);
        $this->assertEquals($styles[0]->getName(), 'text');
        $this->assertEquals($styles[0]->getStyleValue(), [
            "font-size"=> "10pt",
            "color"=> "#978bc6",
            "font-family"=> "BodoniT",
            "text-align"=> "justify",
            "line-height"=> "6.6pt",
            "letter-spacing"=> "0em"
        ]);
    }

    public function testDeserializePage(){

        $this->assertEquals(count($this->document->getPages()), 2);
        $this->assertEquals($this->document->getPages()[0]->getName(), "Page1");
        $this->assertEquals($this->document->getPages()[0]->getPagePosition(), 1);
        $this->assertEquals($this->document->getPages()[1]->getName(), "Page2");
        $this->assertEquals($this->document->getPages()[1]->getPagePosition(), 2);

    }

    public function testDeserializeEveryElements(){

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertEquals(count($elementsFirstPage), 4);
    }

    public function testDeserializeElementsType(){

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertEquals($elementsFirstPage[0]->getType(), "TEXT");
        $this->assertEquals($elementsFirstPage[1]->getType(), "TABLE");
        $this->assertEquals($elementsFirstPage[2]->getType(), "BLOCK");
        $this->assertEquals($elementsFirstPage[3]->getType(), "PICTURE");
    }

    public function testDeserializeElementsId(){

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertEquals($elementsFirstPage[0]->getId(), "Text-5694");
        $this->assertEquals($elementsFirstPage[1]->getId(), "Table-569");
        $this->assertEquals($elementsFirstPage[2]->getId(), "Block-569");
        $this->assertEquals($elementsFirstPage[3]->getId(), "Picture-569");
    }

    public function testDeserializeElementsLabel(){

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertEquals($elementsFirstPage[2]->getLabel(), "block-569");
    }

    public function testDeserializeElementsLabelReturnIdIfEmpty(){

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertEquals($elementsFirstPage[0]->getLabel(), "Text-5694");
        $this->assertEquals($elementsFirstPage[1]->getLabel(), "Table-569");
        $this->assertEquals($elementsFirstPage[3]->getLabel(), "Picture-569");
    }

    public function testDeserializeElementsParentId(){

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertEquals($elementsFirstPage[0]->getParentId(), "Block-569");
        $this->assertEquals($elementsFirstPage[1]->getParentId(), "Block-569");
        $this->assertEquals($elementsFirstPage[3]->getParentId(), "Block-569");
    }

    public function testDeserializeElementsParentIdIsNullIfEmpty(){

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertNull($elementsFirstPage[2]->getParentId());
    }

    public function testDeserializeElementsStyleName(){

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertEquals($elementsFirstPage[0]->getStyleName(), "text");
        $this->assertEquals($elementsFirstPage[1]->getStyleName(), "table");
        $this->assertEquals($elementsFirstPage[2]->getStyleName(), "block");
        $this->assertEquals($elementsFirstPage[3]->getStyleName(), "picture");
    }

}