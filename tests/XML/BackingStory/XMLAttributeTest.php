<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\XML\BackingStory\XmlAttribute;
use Jvital\Idml\XML\Tags\XmlTag as XmlTag;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Crawler;

class XMLAttributeTest extends TestCase
{

  public function testCreateXmlAttribute()
  {
    $XMlAttributes = new XmlAttribute();
    $XMlAttributes->setId('di2i10ei119XMLAttributenhref');
    $XMlAttributes->setName('href');
    $XMlAttributes->setValue('file:///C:/Users/username/Desktop/picture.jpg');
    $this->addToAssertionCount(1);
  }

  public function testDeserializeXmlAttribute()
  {
    $xmlAttributeExpect = file_get_contents(__DIR__.'/XMLAttributeExpect.xml');
    $serializer = SerializerBuilder::create()->build();
    
    
    $xmlAttributeDeserialized = $serializer->deserialize($xmlAttributeExpect, XmlAttribute::class, 'xml');
    
    $this->assertEquals($xmlAttributeDeserialized->getId(),'di2i10ei119XMLAttributenhref');
    $this->assertEquals($xmlAttributeDeserialized->getName(),'href');
    $this->assertEquals($xmlAttributeDeserialized->getValue(),'file:///C:/Users/username/Desktop/picture.jpg');

    $this->assertEquals($serializer->serialize($xmlAttributeDeserialized,'xml'),$xmlAttributeExpect);
  }
}