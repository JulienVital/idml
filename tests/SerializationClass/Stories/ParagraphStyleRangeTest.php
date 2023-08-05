<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Stories\CharacterStyleRange;
use Jvital\Idml\SerializationClass\Idml\Stories\ParagraphStyleRange;
use Jvital\Idml\SerializationClass\Idml\XML\BackingStory\XmlElement;
use Jvital\Tests\Helper\XmlTestCase;
use Symfony\Component\DomCrawler\Crawler;

class ParagraphStyleRangeTest extends XmlTestCase
{



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
    
    $paragraphStyleRange = new ParagraphStyleRange();

    $paragraphStyleRange->setCharacterStyleRange($characterStyleRange);
    //Serialize
    $serializer = SerializerBuilder::create()->build();
    $paragraphStyleRangeSerialized = $serializer->serialize($paragraphStyleRange, 'xml');

    $crawler = new Crawler($paragraphStyleRangeSerialized);
    $attributes = $crawler
    ->filterXpath('//CharacterStyleRange')->children()
    ->extract(['Self', 'XMLContent'])[0];
    $this->assertEquals($attributes[0],'selfId' );
    $this->assertEquals($attributes[1],'uf1' );

  }

  
  public function testDeSerializeAndSerializeIsSame(){
    $xmlExpect = $this->paragraphExpect;

    $serializer = SerializerBuilder::create()->build();

    /** @var XmlElement */
    $xmlDeSerialized = $serializer->deserialize($xmlExpect, ParagraphStyleRange::class, 'xml');
    $XmlSerialized = $serializer->serialize($xmlDeSerialized, 'xml');
    
    $this->assertEquals($XmlSerialized,$xmlExpect);

  }

  public function testCharacterStyleRange(){

    $characterStyleRangeExpect = new CharacterStyleRange();
    $characterStyleRangeExpect->setContent("3");


    $objectDeserialized = $this->deSerialize($this->paragraphExpect, ParagraphStyleRange::class,'xml');
    $this->assertEquals($objectDeserialized->getCharacterStyleRange(), $characterStyleRangeExpect);
  }

  private $paragraphExpect ='<?xml version="1.0" encoding="UTF-8"?>
<ParagraphStyleRange AppliedParagraphStyle="ParagraphStyle/block-index">
  <CharacterStyleRange>
    <Content>3</Content>
  </CharacterStyleRange>
</ParagraphStyleRange>
';


}