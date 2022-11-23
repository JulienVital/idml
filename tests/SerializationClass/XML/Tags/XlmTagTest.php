<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\XML\Tags\XmlTag;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Crawler;

class XLMTagTest extends TestCase
{



  public function testValidXml()
  {

    $xmlTag = new XmlTag();
    $xmlTag->setName('name of Xml Tag');
    $serializer = SerializerBuilder::create()->build();
    $XMLTagSerialized = $serializer->serialize($xmlTag, 'xml');

    $crawler = new Crawler($XMLTagSerialized);
    $attributes = $crawler
    ->filterXpath('//XMLTag')
    ->extract(['Self', 'Name']);

    $this->assertEquals("XMLTag/name_of_Xml_Tag", $attributes[0][0], 'selfTag Error serialization');
    $this->assertEquals("name_of_Xml_Tag", $attributes[0][1], 'NameTag of XMLTag Error serialization');

  }

  public function testDeserialize(){

    $xmlTag = new XmlTag();
    $xmlTag->setName('name of Xml Tag');
    $serializer = SerializerBuilder::create()->build();
    $XMLTagSerialized = $serializer->serialize($xmlTag, 'xml');

    $XMLTagDeserialized = $serializer->deserialize($XMLTagSerialized, XmlTag::class, 'xml');

    $this->assertEquals("name_of_Xml_Tag", $XMLTagDeserialized->getName(), 'NameTag of XMLTag Error Deserialization');

  }
}