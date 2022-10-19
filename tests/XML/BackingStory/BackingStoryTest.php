<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Stories\CharacterStyleRange;
use Jvital\Idml\Stories\ParagraphStyleRange;
use Jvital\Idml\XML\BackingStory\BackingStory;
use Jvital\Idml\XML\BackingStory\XmlElement;
use Jvital\Idml\XML\BackingStory\XmlStory;
use Jvital\Idml\XML\Tags\XmlTag;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Crawler;

class BackingStoryTest extends TestCase
{

  public function testSerialize(){
    
    // Create Object
    
    $characterStyleRange = new CharacterStyleRange();
    $paragraphStyleRange = new ParagraphStyleRange();
    $paragraphStyleRange->setCharacterStyleRange($characterStyleRange);

    $story = new XmlStory();
    $story
      ->setId('pageID')
      ->setParagraphStyleRange($paragraphStyleRange);
    //Serialize

    $backingStory = new BackingStory();
    $backingStory->setXmlStory($story);
    $serializer = SerializerBuilder::create()->build();
    $backingStorySerialized = $serializer->serialize($backingStory, 'xml');

    $crawler = new Crawler($backingStorySerialized);
    $backingStoryElement = $crawler
    ->filterXpath('//idPkg:BackingStory');
    $this->assertEquals($backingStoryElement->children()->nodeName(),'XmlStory' );
    
    // $this->assertEquals($attributesStory[0],'pageID' );
    // $this->assertEquals($storyElement->children()->children()->nodeName(),'CharacterStyleRange' );

  }

  public function testDeserialize(){

      
    $characterStyleRange = new CharacterStyleRange();
    $paragraphStyleRange = new ParagraphStyleRange();
    $paragraphStyleRange->setCharacterStyleRange($characterStyleRange);

    $story = new XmlStory();
    $story
      ->setId('pageID')
      ->setParagraphStyleRange($paragraphStyleRange);
    //Serialize
    $backingStory = new BackingStory();
    $backingStory->setXmlStory($story);
    $serializer = SerializerBuilder::create()->build();
    $backingStorySerialized = $serializer->serialize($backingStory, 'xml');
    $backingStoryDeserialized = $serializer->deserialize($backingStorySerialized, BackingStory::class, 'xml');

    $this->assertEquals($backingStoryDeserialized->getXmlStory(), $story);
  }


}