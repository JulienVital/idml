<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\XML\BackingStory\XmlElement;
use Jvital\Idml\XML\Tags\XmlTag as XmlTag;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Crawler;

class XmlElementTest extends TestCase
{

  public function testXmlTag()
  {

    $xmleEement1 = new XmlElement();

    $xmlTag = new XmlTag();
    $xmlTag->setName('xml tag name from XmlTag');
    $xmleEement1->setXmlTag($xmlTag);

    $this->assertEquals($xmleEement1->getXmlTag(), 'XMLTag/xml_tag_name_from_XmlTag');

  }

  public function testXmlContent()
  {

    $xmleEement1 = new XmlElement();

    $xmleEement1->setXmlContent('testXmlContentId');

    $this->assertEquals($xmleEement1->getXmlContent(), 'testXmlContentId');

  }

  public function testSelfValueId()
  {

    $xmleEement1 = new XmlElement();

    $xmleEement1->setId('selfId');

    $this->assertEquals($xmleEement1->getId(), 'selfId');

  }

  public function testAddChildren()
  {

    $xmleEement1 = new XmlElement();
    $xmleEement2 = new XmlElement();
    $xmleEement2->setXmlContent('testXmlContentId');
    $xmleEement3 = new XmlElement();

    $xmleEement1->addChild($xmleEement2);
    $xmleEement1->addChild($xmleEement3);

    $this->assertEquals($xmleEement1->getChildren(), [$xmleEement2,$xmleEement3]);

    $xmleEement1->setChildren([$xmleEement2,$xmleEement2]);

    $this->assertEquals($xmleEement1->getChildren(), [$xmleEement2,$xmleEement2]);


  }

  public function testSerialize(){
    
    // Create Object
    $xmlTag = new XmlTag();
    $xmlTag->setName('Root Tag Name');
    $xmlTagChild = new XmlTag();
    $xmlTagChild->setName('Child name');

    $xmleEementRoot = new XmlElement();

    $xmleEementRoot
      ->setId('selfId')
      ->setXmlTag($xmlTag)
      ->setXmlContent('testXmlContent');

    $xmleEementChild = new XmlElement();
    $xmleEementChild ->setXmlTag($xmlTagChild)
    ->setXmlContent('childContent')
    ->setId('childId');

    $xmleEementRoot->addChild($xmleEementChild);

    $serializer = SerializerBuilder::create()->build();
    $xmleEementRootSerialized = $serializer->serialize($xmleEementRoot, 'xml');

    // Parse 
    $crawler = new Crawler($xmleEementRootSerialized);
    $attributes = $crawler
    ->filterXpath('//XmlElement')
    ->first()
    ->extract(['Self', 'MarkupTag', 'XMLContent'])[0];

    // Assert

    $this->assertEquals($attributes[0],'selfId');
    $this->assertEquals($attributes[1],'XMLTag/Root_Tag_Name');
    $this->assertEquals($attributes[2],'testXmlContent');

  }

  public function testDeserialize(){

      
    // Create Object
    $xmlTag = new XmlTag();
    $xmlTag->setName('Root Tag Name');
    $xmlTagChild = new XmlTag();
    $xmlTagChild->setName('Child name');

    $xmleEementRoot = new XmlElement();

    $xmleEementRoot
      ->setId('selfId')
      ->setXmlTag($xmlTag)
      ->setXmlContent('testXmlContent');

    $xmleEementChild = new XmlElement();
    $xmleEementChild ->setXmlTag($xmlTagChild)
    ->setXmlContent('childContent')
    ->setId('childId');

    $xmleEementRoot->addChild($xmleEementChild);

    $serializer = SerializerBuilder::create()->build();
    $xmleEementRootSerialized = $serializer->serialize($xmleEementRoot, 'xml');


    $xmleEementRootDeserialized = $serializer->deserialize($xmleEementRootSerialized, XmlElement::class, 'xml');

    $this->assertEquals($xmleEementRootDeserialized->getId(),'selfId');
    $this->assertEquals($xmleEementRootDeserialized->getxmlTag(),'XMLTag/Root_Tag_Name');
    $this->assertEquals($xmleEementRootDeserialized->getXmlContent(),'testXmlContent');

    $this->assertEquals($xmleEementRootDeserialized->getChildren()[0]->getId(),'childId');
    $this->assertEquals($xmleEementRootDeserialized->getChildren()[0]->getxmlTag(),'XMLTag/Child_name');
    $this->assertEquals($xmleEementRootDeserialized->getChildren()[0]->getXmlContent(),'childContent');

  }
}