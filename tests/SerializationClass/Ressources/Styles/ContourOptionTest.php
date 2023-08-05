<?php

use Jvital\Idml\SerializationClass\Idml\Ressources\Styles\ContourOption;
use Jvital\Tests\Helper\XmlTestCase;

class ContourOptionTest extends XmlTestCase{

    public function testContourTypeValue(){
        $valueTest = "test ContourType value";
        $cell = new ContourOption();
        $cell->setContourType($valueTest);

        $cellSerialized = $this->serialize($cell, 'xml');
        $cellDeserialized = $this->deSerialize($cellSerialized, ContourOption::class,'xml');

        $this->assertEquals($cellDeserialized->getContourType(), $valueTest);

    }

}