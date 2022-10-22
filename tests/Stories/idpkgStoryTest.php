<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Stories\IdpkgStory;
use PHPUnit\Framework\TestCase;

class idpkgStoryTest extends TestCase
{

  public function testSerializeDeserialize(){

    // $xmlExpect = file_get_contents(__DIR__.'/IdpkgstoryExpect.xml');
    // $serializer = SerializerBuilder::create()->build();

    // /** @var XmlElement */
    // $xmlDeSerialized = $serializer->deserialize($xmlExpect, IdpkgStory::class, 'xml');
    // $XmlSerialized = $serializer->serialize($xmlDeSerialized, 'xml');
    
    // $this->assertEquals($XmlSerialized,$xmlExpect);
  }

}
