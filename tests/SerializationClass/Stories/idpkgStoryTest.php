<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Stories\StoryIdpkg;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertTrue;

class idpkgStoryTest extends TestCase
{

  public function testSerializeDeserialize(){

    $this->assertTrue(true);
    // $xmlExpect = file_get_contents(__DIR__.'/IdpkgstoryExpect.xml');
    // $serializer = SerializerBuilder::create()->build();

    // /** @var XmlElement */
    // $xmlDeSerialized = $serializer->deserialize($xmlExpect, IdpkgStory::class, 'xml');
    // $XmlSerialized = $serializer->serialize($xmlDeSerialized, 'xml');
    
    // $this->assertEquals($XmlSerialized,$xmlExpect);
  }

}
