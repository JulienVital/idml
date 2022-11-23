<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Stories\CharacterStyleRange;
use Jvital\Idml\SerializationClass\XML\BackingStory\XmlElement;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Crawler;

class CharacterStyleRangeTest extends TestCase
{

  public function testGetterAndSetter(){
    
    // Create Object
    $characterStyleRange = new CharacterStyleRange();

    $xmlElement = new XmlElement();
    $xmlElementchild = new XmlElement();
    $xmlElement
      ->setId('selfId1')
      ->setXmlContent('uf1')
      ->addChild($xmlElementchild);
    $xmlElementchild
      ->setId('childfId')
      ->setXmlContent('uf12');
    $characterStyleRange->setXmlElement($xmlElement);
    $characterStyleRange->setContent("testSetterContent");

    $this->assertEquals($characterStyleRange->getXmlElement(),$xmlElement );
    $this->assertEquals($characterStyleRange->getContent(),"testSetterContent" );
  }

  public function testSerialize(){
    
    // Create Object
    $characterStyleRange = new CharacterStyleRange();

    $xmlElement = new XmlElement();
    $xmlElementchild = new XmlElement();
    $xmlElement
      ->setId('selfId')
      ->setXmlContent('uf1')
      ->addChild($xmlElementchild);
    $xmlElementchild
      ->setId('childfId')
      ->setXmlContent('uf12');
    $characterStyleRange->setXmlElement($xmlElement);


    //Serialize
    $serializer = SerializerBuilder::create()->build();
    $characterStyleRangeSerialized = $serializer->serialize($characterStyleRange, 'xml');

    $crawler = new Crawler($characterStyleRangeSerialized);
    $attributes = $crawler
    ->filterXpath('//CharacterStyleRange')->children()
    ->extract(['Self', 'XMLContent'])[0];
    $this->assertEquals($attributes[0],'selfId' );
    $this->assertEquals($attributes[1],'uf1' );

  }

  public function testDeSerializeAndSerializeIsSame(){
    $xmlExpect = <<<EOT
    <?xml version="1.0" encoding="UTF-8"?>
    <CharacterStyleRange>
      <Content>3</Content>
    </CharacterStyleRange>

    EOT;

    $serializer = SerializerBuilder::create()->build();

    /** @var XmlElement */
    $xmlDeSerialized = $serializer->deserialize($xmlExpect, CharacterStyleRange::class, 'xml');
    $XmlSerialized = $serializer->serialize($xmlDeSerialized, 'xml');
    
    $this->assertEquals($XmlSerialized,$xmlExpect);


  }


  public function testSingleColumnWidth(){
    $serializer = SerializerBuilder::create()->build();
    $characterStyleRange = new CharacterStyleRange();
    $characterStyleRange->setAppliedCharacterStyle('CharacterStyle/$ID/[No character style2]');
    $characterStyleRangeSerialized = $serializer->serialize($characterStyleRange, 'xml');
    $characterStyleRangeDeserialized = $serializer->deSerialize($characterStyleRangeSerialized, CharacterStyleRange::class,'xml');

    $this->assertEquals($characterStyleRangeDeserialized->getAppliedCharacterStyle(), 'CharacterStyle/$ID/[No character style2]');
  }
}