<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Stories\CharacterStyleRange;
use Jvital\Idml\Stories\StoryIdpkg;
use Jvital\Idml\Stories\ParagraphStyleRange;
use Jvital\Idml\Stories\Story;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Crawler;

class StoryTest extends TestCase
{

  public function testSerialize(){
    
    // Create Object
    $characterStyleRange = new CharacterStyleRange();
    $paragraphStyleRange = new ParagraphStyleRange();
    $paragraphStyleRange->setCharacterStyleRange($characterStyleRange);

    $story = new Story();
    $story
      ->setId('pageID')
      ->setParagraphStyleRange($paragraphStyleRange);
    //Serialize
    $serializer = SerializerBuilder::create()->build();
    $storySerialized = $serializer->serialize($story, 'xml');

    $crawler = new Crawler($storySerialized);
    $storyElement = $crawler
    ->filterXpath('//Story');
    
    $attributesStory = $storyElement->extract(['Self']);
    $this->assertEquals($attributesStory[0],'pageID' );
    $this->assertEquals($storyElement->children()->nodeName(),'ParagraphStyleRange' );
    $this->assertEquals($storyElement->children()->children()->nodeName(),'CharacterStyleRange' );

  }

  public function testStory(){
    
    // Create Object
    $characterStyleRange = new CharacterStyleRange();
    $paragraphStyleRange = new ParagraphStyleRange();
    $paragraphStyleRange->setCharacterStyleRange($characterStyleRange);

    $story = new Story();
    $story
      ->setId('pageID')
      ->setParagraphStyleRange($paragraphStyleRange);
    //Serialize
    $serializer = SerializerBuilder::create()->build();
    $storySerialized = $serializer->serialize($story, 'xml');

    $crawler = new Crawler($storySerialized);
    $storyElement = $crawler->first();
    
    $this->assertEquals($storyElement->nodeName(),'Story' );

  }

  public function testStoryDeserialize(){
    
    $xmlExpect = file_get_contents(__DIR__.'/expects/IdpkgstoryExpect.xml');
    $serializer = SerializerBuilder::create()->build();

    /** @var IdpkgStory */
    $xmlDeSerialized = $serializer->deserialize($xmlExpect, StoryIdpkg::class, 'xml');
    $XmlSerialized = $serializer->serialize($xmlDeSerialized, 'xml');
    
    $this->assertEquals($xmlExpect,$XmlSerialized);

  }
}