<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Structure\Tags\XMLTag;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Crawler;

class XLMTagTest extends TestCase
{

  public function testLaunch(){

    $this->assertTrue(true);
  }

  public function testValidXml()
  {

    $xmlTag = new XMLTag();
    $xmlTag->setName('name of Xml Tag');
    $serializer = SerializerBuilder::create()->build();
    $XMLTagSerialized = $serializer->serialize($xmlTag, 'xml');

    $crawler = new Crawler($XMLTagSerialized);
    $attributes = $crawler
    ->filterXpath('//XMLTag')
    ->extract(['Self', 'Name']);

    $this->assertEquals("XMLTag/name of Xml Tag", $attributes[0][0], 'selfTag Error serialization');
    $this->assertEquals("name of Xml Tag", $attributes[0][1], 'NameTag of XMLTag Error serialization');

  }

  public function testDeserialize(){

    $xmlTag = new XMLTag();
    $xmlTag->setName('name of Xml Tag');
    $serializer = SerializerBuilder::create()->build();
    $XMLTagSerialized = $serializer->serialize($xmlTag, 'xml');

    $XMLTagDeserialized = $serializer->deserialize($XMLTagSerialized, XMLTag::class, 'xml');

    $this->assertEquals("name of Xml Tag", $XMLTagDeserialized->getName(), 'NameTag of XMLTag Error Deserialization');

  }
}