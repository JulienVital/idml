<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\XML\Tags\Tags;
use Jvital\Idml\SerializationClass\Idml\XML\Tags\XmlTag;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Crawler;

class TagsTest extends TestCase
{

  public function testValidXml()
  {

  $xmlTag = new XmlTag();
  $xmlTag->setName('name of Xml Tag');
  
  $xmlTag2 = new XmlTag();
  $xmlTag2->setName('name of Xml Tag2');
  $tags = new Tags();
  $tags->setMarkupTags([$xmlTag, $xmlTag2]);
    
  $xmlTag3 = new XmlTag();
  $xmlTag3->setName('name of Xml Tag3');
  $tags->addXMLTags($xmlTag3);

  $serializer = SerializerBuilder::create()->build();
  $tagsSerialized = $serializer->serialize($tags, 'xml');
  $crawler = new Crawler($tagsSerialized);

  $childrenTypeNode = $crawler
  ->filterXpath('//idPkg:Tags')->children()->extract(['_name']);

  $this->assertEquals("XMLTag", $childrenTypeNode[0]);
  $this->assertEquals("XMLTag", $childrenTypeNode[1]);
  $this->assertEquals("XMLTag", $childrenTypeNode[2]);

  }

  public function testDeserializeTagsXml()
  {

    $xmlTag = new XmlTag();
    $xmlTag->setName('name of Xml Tag');
    
    $xmlTag2 = new XmlTag();
    $xmlTag2->setName('name of Xml Tag2');
    $tags = new Tags();
    $tags->setMarkupTags([$xmlTag, $xmlTag2]);
    
    $serializer = SerializerBuilder::create()->build();
    $tagsSerialized = $serializer->serialize($tags, 'xml');
  
    $tagsDeserialized = $serializer->deserialize($tagsSerialized, Tags::class, 'xml');

    $this->assertTrue(is_array($tagsDeserialized->getMarkupTags()));
    $this->assertEquals($tagsDeserialized->getMarkupTags()[0]->getName(),'name_of_Xml_Tag' );
    $this->assertEquals($tagsDeserialized->getMarkupTags()[1]->getName(),'name_of_Xml_Tag2' );

  }

}