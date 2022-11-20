<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Ressources\Styles\ParagraphStyle;
use PHPUnit\Framework\TestCase;

class ParagraphStyleTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
        $this->xmlExpect['ParagraphStyle1'] = file_get_contents(__DIR__.'/expects/ParagraphStyle1.xml');
        $this->xmlExpect['ParagraphStyle2'] = file_get_contents(__DIR__.'/expects/ParagraphStyle2.xml');
        $this->xmlExpect['ParagraphStyle3'] = file_get_contents(__DIR__.'/expects/ParagraphStyle3.xml');
        $this->xmlExpect['ParagraphStyle4'] = file_get_contents(__DIR__.'/expects/ParagraphStyle4.xml');
    }

    public function testDeserializeSerializeIsSame(){

        $paragraphStyleDeSerialized = $this->serializer->deSerialize($this->xmlExpect['ParagraphStyle1'], ParagraphStyle::class,'xml');
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyleDeSerialized, 'xml');

        $this->assertEquals($paragraphStyleSerialized, $this->xmlExpect['ParagraphStyle1']);
    }

    public function testDeserializeSerializeIsSame2(){

        $paragraphStyleDeSerialized = $this->serializer->deSerialize($this->xmlExpect['ParagraphStyle2'], ParagraphStyle::class,'xml');
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyleDeSerialized, 'xml');

        $this->assertEquals($paragraphStyleSerialized, $this->xmlExpect['ParagraphStyle2']);
    }

    public function testDeserializeSerializeIsSame3(){

        $paragraphStyleDeSerialized = $this->serializer->deSerialize($this->xmlExpect['ParagraphStyle3'], ParagraphStyle::class,'xml');
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyleDeSerialized, 'xml');

        $this->assertEquals($paragraphStyleSerialized, $this->xmlExpect['ParagraphStyle3']);
    }

    public function testDeserializeSerializeIsSame4(){

        $paragraphStyleDeSerialized = $this->serializer->deSerialize($this->xmlExpect['ParagraphStyle4'], ParagraphStyle::class,'xml');
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyleDeSerialized, 'xml');

        $this->assertEquals($paragraphStyleSerialized, $this->xmlExpect['ParagraphStyle4']);
    }
    public function testImported(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setImported(false);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->isImported(), false);
    }

    public function testNextStyle(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setNextStyle("test name next Style");
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getNextStyle(), "test name next Style");
    }
}