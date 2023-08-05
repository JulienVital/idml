<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Ressources\Styles\ParagraphStyle;
use PHPUnit\Framework\TestCase;

class ParagraphStyleTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;
    private $xmlExpect;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
        $this->xmlExpect['ParagraphStyle1'] = file_get_contents(__DIR__.'/expects/ParagraphStyle1.xml');
        $this->xmlExpect['ParagraphStyle2'] = file_get_contents(__DIR__.'/expects/ParagraphStyle2.xml');
        $this->xmlExpect['ParagraphStyle3'] = file_get_contents(__DIR__.'/expects/ParagraphStyle3.xml');
        $this->xmlExpect['ParagraphStyle4'] = file_get_contents(__DIR__.'/expects/ParagraphStyle4.xml');
        $this->xmlExpect['ParagraphStyle5'] = file_get_contents(__DIR__.'/expects/ParagraphStyle5.xml');
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

    public function testDeserializeSerializeIsSame5(){

        $paragraphStyleDeSerialized = $this->serializer->deSerialize($this->xmlExpect['ParagraphStyle5'], ParagraphStyle::class,'xml');
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyleDeSerialized, 'xml');

        $this->assertEquals($paragraphStyleSerialized, $this->xmlExpect['ParagraphStyle5']);
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

    public function testVerticalScale (){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setVerticalScale (123);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getVerticalScale (), 123);
    }

    public function testUnderline(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setUnderline(true);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->isUnderline(), true);
    }

    public function testTracking(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setTracking(123);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getTracking(), 123);
    }

    public function testStrikeThru(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setStrikeThru(true);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->isStrikeThru(), true);
    }

    public function testSpaceBefore(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setSpaceBefore(58);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getSpaceBefore(), 58);
    }

    public function testSpaceAfter(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setSpaceAfter(12);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getSpaceAfter(), 12);
    }

    public function testSkew(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setSkew(8);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getSkew(), 8);
    }

    public function testRightIndent(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setRightIndent(8);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getRightIndent(), 8);
    }

    public function testLeftIndent(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setLeftIndent(8);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getLeftIndent(), 8);
    }

    public function testPointSize(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setPointSize(11);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getPointSize(), 11);
    }

    public function testLastLineIndent(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setLastLineIndent(6);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getLastLineIndent(), 6);
    }

    public function testFirstLineIndent(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setFirstLineIndent(6);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getFirstLineIndent(), 6);
    }

    public function testJustification(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setJustification("LeftJustified");
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getJustification(), "LeftJustified");
    }

    public function testCapitalization(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setCapitalization("SmallCaps");
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getCapitalization(), "SmallCaps");
    }
    
    public function testFontStyle(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setFontStyle("Bold");
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getFontStyle(), "Bold");
    }

    public function testHorizontalScale(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setHorizontalScale(12);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getHorizontalScale(), 12);
    }

    public function testBaselineShift(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setBaselineShift(12);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getBaselineShift(), 12);
    }
    
    public function testParagraphBorderOn(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setParagraphBorderOn(true);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->isParagraphBorderOn(), true);
    }

    public function testParagraphBorderOnFalse(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setParagraphBorderOn(false);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->isParagraphBorderOn(), false);
    }

    public function testParagraphBorderTopLineWeight(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setParagraphBorderTopLineWeight(12);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getParagraphBorderTopLineWeight(), 12);
    }

    public function testParagraphBorderBottomLineWeight(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setParagraphBorderBottomLineWeight(10);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getParagraphBorderBottomLineWeight(), 10);
    }

    public function testParagraphBorderLeftLineWeight(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setParagraphBorderLeftLineWeight(11);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getParagraphBorderLeftLineWeight(), 11);
    }

    public function testParagraphBorderRightLineWeight(){
        $paragraphStyle = new ParagraphStyle();
        $paragraphStyle->setParagraphBorderRightLineWeight(3);
        $paragraphStyleSerialized = $this->serializer->serialize($paragraphStyle, 'xml');
        $paragraphStyleDeSerialized = $this->serializer->deSerialize($paragraphStyleSerialized, ParagraphStyle::class,'xml');

        $this->assertEquals($paragraphStyleDeSerialized->getParagraphBorderRightLineWeight(), 3);
    }
}