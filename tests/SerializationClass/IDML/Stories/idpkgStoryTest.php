<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Stories\StoryIdpkg;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertTrue;

class idpkgStoryTest extends TestCase
{

  public function testSerializeDeserialize(){

    $xmlExpect = file_get_contents(__DIR__.'/expects/IdpkgstoryExpect.xml');
    $serializer = SerializerBuilder::create()->build();

    /** @var XmlElement */
    $xmlDeSerialized = $serializer->deserialize($xmlExpect, StoryIdpkg::class, 'xml');
    $XmlSerialized = $serializer->serialize($xmlDeSerialized, 'xml');
    
    $this->assertEquals($xmlExpect,$XmlSerialized);
  }

}
