<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Stories\CharacterStyleRange;
use Jvital\Idml\Stories\ParagraphStyleRange;
use Jvital\Idml\XML\BackingStory\BackingStory;
use Jvital\Idml\XML\BackingStory\XmlElement;
use Jvital\Idml\XML\BackingStory\XmlStory;
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

  public function testExpect(){

    $xmlExpect = file_get_contents(__DIR__.'/expects/BackingStoryExpect.xml');
    $serializer = SerializerBuilder::create()->build();

    /** @var BackingStory */
    $xmlDeSerialized = $serializer->deserialize($xmlExpect, BackingStory::class, 'xml');
    $XmlSerialized = $serializer->serialize($xmlDeSerialized, 'xml');
    
    $this->assertEquals($XmlSerialized,$xmlExpect);
  }

  public function testGetterFromDeserialize(){

    $xmlExpect = file_get_contents(__DIR__.'/expects/BackingStoryExpect.xml');
    $serializer = SerializerBuilder::create()->build();

    /** @var BackingStory */
    $xmlDeSerialized = $serializer->deserialize($xmlExpect, BackingStory::class, 'xml');
    
    $paragraphStyle = $xmlDeSerialized->getXmlStory()->getParagraphStyleRange()->getAppliedParagraphStyle();
    $this->assertEquals($paragraphStyle ,'ParagraphStyle/$ID/NormalParagraphStyle');

    $storyId = $xmlDeSerialized->getXmlStory()->getId();
    $this->assertEquals($storyId ,'ub0');
  }
}