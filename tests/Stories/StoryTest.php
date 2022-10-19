<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Stories\CharacterStyleRange;
use Jvital\Idml\Stories\ParagraphStyleRange;
use Jvital\Idml\Stories\Story;
use Jvital\Idml\XML\BackingStory\XmlStory;
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

  public function testXmlStory(){
    
    // Create Object
    $characterStyleRange = new CharacterStyleRange();
    $paragraphStyleRange = new ParagraphStyleRange();
    $paragraphStyleRange->setCharacterStyleRange($characterStyleRange);

    $story = new XmlStory();
    $story
      ->setId('pageID')
      ->setParagraphStyleRange($paragraphStyleRange);
    //Serialize
    $serializer = SerializerBuilder::create()->build();
    $storySerialized = $serializer->serialize($story, 'xml');

    $crawler = new Crawler($storySerialized);
    $storyElement = $crawler->first();
    
    $this->assertEquals($storyElement->nodeName(),'XmlStory' );

  }

}