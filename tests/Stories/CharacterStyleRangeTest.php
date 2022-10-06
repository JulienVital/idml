<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Stories\CharacterStyleRange;
use Jvital\Idml\XML\BackingStory\XmlElement;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Crawler;

class CharacterStyleRangeTest extends TestCase
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

}