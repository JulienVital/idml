<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\XML\BackingStory\XmlAttribute;
use PHPUnit\Framework\TestCase;

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
    $xmlAttributeExpect = file_get_contents(__DIR__.'/expects/XMLAttributeExpect.xml');
    $serializer = SerializerBuilder::create()->build();
    
    
    $xmlAttributeDeserialized = $serializer->deserialize($xmlAttributeExpect, XmlAttribute::class, 'xml');
    
    $this->assertEquals($xmlAttributeDeserialized->getId(),'di2i10ei119XMLAttributenhref');
    $this->assertEquals($xmlAttributeDeserialized->getName(),'href');
    $this->assertEquals($xmlAttributeDeserialized->getValue(),'file:///C:/Users/username/Desktop/picture.jpg');

    $this->assertEquals($serializer->serialize($xmlAttributeDeserialized,'xml'),$xmlAttributeExpect);
  }
}