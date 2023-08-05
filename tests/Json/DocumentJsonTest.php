<?php

use Jvital\Idml\Builder\Json\Loader;
use Jvital\Idml\SerializationClass\Json\Document;
use Jvital\Idml\SerializationClass\Json\Elements\Block;
use Jvital\Idml\SerializationClass\Json\Elements\Picture;
use Jvital\Idml\SerializationClass\Json\Elements\Size;
use Jvital\Idml\SerializationClass\Json\Elements\Table;
use Jvital\Idml\SerializationClass\Json\Elements\Text;
use PHPUnit\Framework\TestCase;

class DocumentJsonTest extends TestCase
{

    private Document $document;
    private $loader;
    private string $jsonTest;

    protected function setUp():void{
        $this->loader = new Loader();
        $this->jsonTest = file_get_contents('tempJson');
        $this->document = $this->loader->load($this->jsonTest);
    }

    public function testDeserializeName()
    {

        $this->assertEquals($this->document->getName(), "Current Document test");
    }

    public function testDeserializeDocumentProperties()
    {

        $this->assertEquals($this->document->getProperties()->getBackgroundColor(), "#ffffff");
        $this->assertEquals($this->document->getProperties()->getWidth(), 210);
        $this->assertEquals($this->document->getProperties()->getHeight(), 290);
        $this->assertEquals($this->document->getProperties()->getMeasurementUnit(), "mm");
    }

    public function testDeserializeDocumentStyles()
    {
        $styles = $this->document->getStyles();
        $this->assertEquals(count($styles), 4);
        $this->assertEquals($styles[0]->getName(), 'text');
        $this->assertEquals($styles[0]->getStyleValue(), [
            "font-size" => "10pt",
            "color" => "#978bc6",
            "font-family" => "BodoniT",
            "text-align" => "justify",
            "line-height" => "6.6pt",
            "letter-spacing" => "0em"
        ]);
    }

    public function testDeserializePage()
    {

        $this->assertEquals(count($this->document->getPages()), 2);
        $this->assertEquals($this->document->getPages()[0]->getName(), "Page1");
        $this->assertEquals($this->document->getPages()[0]->getPagePosition(), 1);
        $this->assertEquals($this->document->getPages()[1]->getName(), "Page2");
        $this->assertEquals($this->document->getPages()[1]->getPagePosition(), 2);
    }

    public function testDeserializeEveryElements()
    {

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertEquals(count($elementsFirstPage), 4);
    }

    public function testDeserializeElementsType()
    {

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertEquals($elementsFirstPage[0]->getType(), "TEXT");
        $this->assertEquals($elementsFirstPage[1]->getType(), "TABLE");
        $this->assertEquals($elementsFirstPage[2]->getType(), "BLOCK");
        $this->assertEquals($elementsFirstPage[3]->getType(), "PICTURE");
    }

    public function testDeserializeElementsId()
    {

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertEquals($elementsFirstPage[0]->getId(), "Text-5694");
        $this->assertEquals($elementsFirstPage[1]->getId(), "Table-569");
        $this->assertEquals($elementsFirstPage[2]->getId(), "Block-569");
        $this->assertEquals($elementsFirstPage[3]->getId(), "Picture-569");
    }

    public function testDeserializeElementsLabel()
    {

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertEquals($elementsFirstPage[2]->getLabel(), "block-569");
    }

    public function testDeserializeElementsLabelReturnNullIfEmpty()
    {

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertNull($elementsFirstPage[0]->getLabel());
        $this->assertNull($elementsFirstPage[1]->getLabel());
        $this->assertNull($elementsFirstPage[3]->getLabel());
    }

    public function testDeserializeElementsParentId()
    {

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertEquals($elementsFirstPage[0]->getParentId(), "Block-569");
        $this->assertEquals($elementsFirstPage[1]->getParentId(), "Block-569");
        $this->assertEquals($elementsFirstPage[3]->getParentId(), "Block-569");
    }

    public function testDeserializeElementsParentIdIsNullIfEmpty()
    {

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertNull($elementsFirstPage[2]->getParentId());
    }

    public function testDeserializeElementsStyleName()
    {

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertEquals($elementsFirstPage[0]->getStyleName(), "text");
        $this->assertEquals($elementsFirstPage[1]->getStyleName(), "table");
        $this->assertEquals($elementsFirstPage[2]->getStyleName(), "block");
        $this->assertEquals($elementsFirstPage[3]->getStyleName(), "picture");
    }

    public function testDeserializeElementsInstance()
    {

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertEquals($elementsFirstPage[0]::class, Text::class);
        $this->assertEquals($elementsFirstPage[1]::class, Table::class);
        $this->assertEquals($elementsFirstPage[2]::class, Block::class);
        $this->assertEquals($elementsFirstPage[3]::class, Picture::class);
    }

    public function testDeserializeElementsSize()
    {
        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertNotNull($elementsFirstPage[0]->getSize());
        $this->assertNotNull($elementsFirstPage[1]->getSize());
        $this->assertNotNull($elementsFirstPage[2]->getSize());
        $this->assertNotNull($elementsFirstPage[3]->getSize());
    }

    public function testDeserializeElementsSizeContain()
    {

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertEquals($elementsFirstPage[0]->getSize(), new Size("6.61458325mm","17.19791645mm", "66.542707495mm","25.082499684000002mm"));
        $this->assertEquals($elementsFirstPage[1]->getSize(), new Size("27.301030906050002mm","19.84374975mm", "97.92229043300001mm","57.546874275mm"));
    }

    public function testDeserializeElementsProperties()
    {

        $elementsFirstPage = $this->document->getPages()[0]->getElements();
        $this->assertEquals($elementsFirstPage[0]->getProperties(),["color"=> "#978bc6"] );
        $this->assertEquals($elementsFirstPage[1]->getProperties(), []);
    }
}
