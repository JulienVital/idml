<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Properties\Properties;
use Jvital\Idml\SerializationClass\Properties\Value\AppliedFont;
use Jvital\Idml\SerializationClass\Properties\Value\BasedOn;
use Jvital\Idml\SerializationClass\Properties\Value\Leading;
use Jvital\Idml\SerializationClass\Properties\Value\ParagraphBorderColor;
use Jvital\Idml\SerializationClass\Properties\Value\ParagraphBorderType;
use PHPUnit\Framework\TestCase;

class PropertiesTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;
    private $xmlExpect;
    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
        $this->xmlExpect['Properties'] = file_get_contents(__DIR__.'/expects/propertiesExpect.xml');
    }

    public function testDeserializeSerializeIsSame(){

        $propertiesDeSerialized = $this->serializer->deSerialize($this->xmlExpect['Properties'], Properties::class,'xml');
        $propertiesSerialized = $this->serializer->serialize($propertiesDeSerialized, 'xml');

        $this->assertEquals($propertiesSerialized, $this->xmlExpect['Properties']);
    }

    public function testAppliedFont(){
        $property = new Properties();
        $appliedFontValue = new AppliedFont(); 
        $appliedFontValue->setType('string');
        $appliedFontValue->setValue('Miriam Libre');
        $property->setAppliedFont($appliedFontValue);

        $propertySerialized = $this->serializer->serialize($property, 'xml');
        $propertyDeSerialized = $this->serializer->deSerialize($propertySerialized, Properties::class,'xml');

        $this->assertEquals($propertyDeSerialized->getAppliedFont()->getType(), 'string');
        $this->assertEquals($propertyDeSerialized->getAppliedFont()->getValue(), 'Miriam Libre');
    }

    public function testBasedOn(){
        $property = new Properties();
        $BasedOnValue = new BasedOn(); 
        $BasedOnValue->setType('string');
        $BasedOnValue->setValue('$ID/[No paragraph style]');
        $property->setBasedOn($BasedOnValue);

        $propertySerialized = $this->serializer->serialize($property, 'xml');
        $propertyDeSerialized = $this->serializer->deSerialize($propertySerialized, Properties::class,'xml');

        $this->assertEquals($propertyDeSerialized->getBasedOn()->getType(), 'string');
        $this->assertEquals($propertyDeSerialized->getBasedOn()->getValue(), '$ID/[No paragraph style]');
    }

    public function testLeading(){
        $property = new Properties();
        $leadingValue = new Leading(); 
        $leadingValue->setType('unit');
        $leadingValue->setValue(25);
        $property->setLeading($leadingValue);

        $propertySerialized = $this->serializer->serialize($property, 'xml');
        $propertyDeSerialized = $this->serializer->deSerialize($propertySerialized, Properties::class,'xml');

        $this->assertEquals($propertyDeSerialized->getLeading()->getType(), 'unit');
        $this->assertEquals($propertyDeSerialized->getLeading()->getValue(), 25);
    }

    public function testParagraphBorderColor(){
        $property = new Properties();
        $paragraphBorderColorValue = new ParagraphBorderColor(); 
        $paragraphBorderColorValue->setType('object');
        $paragraphBorderColorValue->setValue(25);
        $property->setParagraphBorderColor($paragraphBorderColorValue);

        $propertySerialized = $this->serializer->serialize($property, 'xml');
        $propertyDeSerialized = $this->serializer->deSerialize($propertySerialized, Properties::class,'xml');

        $this->assertEquals($propertyDeSerialized->getParagraphBorderColor()->getType(), 'object');
        $this->assertEquals($propertyDeSerialized->getParagraphBorderColor()->getValue(), 25);
    }

    public function testParagraphBorderType(){
        $property = new Properties();
        $paragraphBorderTypeValue = new ParagraphBorderType(); 
        $paragraphBorderTypeValue->setType('StrokeStyle/$ID/ThickThick');
        $paragraphBorderTypeValue->setValue(25);
        $property->setParagraphBorderType($paragraphBorderTypeValue);

        $propertySerialized = $this->serializer->serialize($property, 'xml');
        $propertyDeSerialized = $this->serializer->deSerialize($propertySerialized, Properties::class,'xml');

        $this->assertEquals($propertyDeSerialized->getParagraphBorderType()->getType(), 'StrokeStyle/$ID/ThickThick');
        $this->assertEquals($propertyDeSerialized->getParagraphBorderType()->getValue(), 25);
    }
}