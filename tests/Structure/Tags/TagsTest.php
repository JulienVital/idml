<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Structure\Tags\Tags;
use Jvital\Idml\Structure\Tags\XMLTag;
use PHPUnit\Framework\TestCase;

class TagsTest extends TestCase
{



  public function testValidXml()
  {

  $xmlTag = new XMLTag();
  $xmlTag->setName('name of Xml Tag');
  
  $xmlTag2 = new XMLTag();
  $xmlTag2->setName('name of Xml Tag2');
  $tags = new Tags();
  $tags->setXMLTags([$xmlTag, $xmlTag2]);
  
  $serializer = SerializerBuilder::create()->build();
  $XMLTagSerialized = $serializer->serialize($tags, 'xml');
  
  $XMLTagDeserialized = $serializer->deserialize($XMLTagSerialized, Tags::class, 'xml');
  }

}