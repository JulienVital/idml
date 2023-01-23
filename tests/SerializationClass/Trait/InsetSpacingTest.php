<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Properties\Value\InsetSpacing;
use Jvital\Idml\SerializationClass\Properties\Value\ListItem;
use Jvital\Idml\SerializationClass\Trait\InsetSpacingValue;
use Jvital\Tests\Helper\XmlTestCase;

Class testInsetSpacing{
    use InsetSpacingValue;
}

Class InsetSpacingTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testSerializeToXml(){

        $listItem = new ListItem();
        $listItem->setType("unit");
        $listItem->setValue("1");
        $listItem2 = new ListItem();
        $listItem2->setType("unit");
        $listItem2->setValue("2");

        $insetSpacing = new InsetSpacing();
        $insetSpacing->setListItem([ $listItem,  $listItem2]);

        $myClass = new testInsetSpacing();
        $myClass->setInsetSpacing($insetSpacing);

        $xmlSerialized = $this->serialize($myClass, 'xml');

        $expectedXml = 
        '<?xml version="1.0" encoding="UTF-8"?>
        <result>
            <InsetSpacing>
            <ListItem type="unit">1</ListItem>
            <ListItem type="unit">2</ListItem>
            </InsetSpacing>
        </result>';

        // $result = $this->assertXmlStringEqualsXmlString($expectedXml, $xmlSerialized);
        $this->assertXmlStringEqualsXmlString(
          $expectedXml,
          $xmlSerialized,
          "actual xml string is equal to expected xml string"
      ); 
    }

    public function testDeserializeXml(){

        $xmlFile = 
        '<?xml version="1.0" encoding="UTF-8"?>
        <result>
            <InsetSpacing>
                <ListItem type="unit">1</ListItem>
                <ListItem type="unit">2</ListItem>
            </InsetSpacing>
        </result>';
        $objectDeserialized = $this->deSerialize($xmlFile, testInsetSpacing::class,'xml');

        $listItem = new ListItem();
        $listItem->setType("unit");
        $listItem->setValue("1");
        $listItem2 = new ListItem();
        $listItem2->setType("unit");
        $listItem2->setValue("2");

        $insetSpacing = new InsetSpacing();
        $insetSpacing->setListItem([ $listItem,  $listItem2]);

        $this->assertEquals($objectDeserialized->getInsetSpacing(),$insetSpacing);
    }

}
