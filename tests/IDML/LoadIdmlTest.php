<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Builder\IdmlDocument;
use Jvital\Idml\SerializationClass\Designmap\Designmap;
use Jvital\Idml\SerializationClass\Ressources\Fonts\FontIdpkg;
use Jvital\Idml\SerializationClass\Ressources\Graphics\GraphicIdpkg;
use Jvital\Idml\SerializationClass\Ressources\Styles\StylesIdpkg;
use Jvital\Idml\SerializationClass\Spread\SpreadIdpkg;
use Jvital\Idml\SerializationClass\Stories\StoryIdpkg;
use PHPUnit\Framework\TestCase;


class LoadIdmlTest extends TestCase{

  const EXPECTS_FOLDER = __DIR__."/expects/";

  protected function setUp():void{

  }


  public function testLoadIdml(){
    $serializer = SerializerBuilder::create()->build();
    $idmlFile = __DIR__ ."/expects/Minimalist Magazine Layout.idml";

    $zip = new ZipArchive;
    $zip->open($idmlFile);
    $document = new IdmlDocument('tempName');
    for ($i = 0; $i < $zip->numFiles; $i++) {
      $name = $zip->getNameIndex($i);
      $contents = $zip->getFromIndex($i);

      if (strpos($name, 'Spread') === 0){
        
        $spreadDeSerialized = $serializer->deSerialize($contents, SpreadIdpkg::class,'xml');
        $document->addSpreads($spreadDeSerialized);
      }

      if (strpos($name, 'Stories') === 0){
        
        $storyDeserialized = $serializer->deSerialize($contents, StoryIdpkg::class,'xml');
        $document->addStory($storyDeserialized);
      }

      if (strpos($name, 'designmap') === 0){
        
        $designMapDeserialized = $serializer->deSerialize($contents, Designmap::class,'xml');
        $document->setDesignMap($designMapDeserialized);
      }
      
      if (strpos($name, "Resources/Fonts.xml") === 0){
        
        $font = $serializer->deSerialize($contents, FontIdpkg::class,'xml');
        $document->setFonts($font);
      }

      if (strpos($name, "Resources/Graphic.xml") === 0){
        
        $graphic = $serializer->deSerialize($contents, GraphicIdpkg::class,'xml');
        $document->setGraphic($graphic);
      }

      if (strpos($name, "Resources/Style.xml") === 0){
        
        $styles = $serializer->deSerialize($contents, StylesIdpkg::class,'xml');
        $document->setStyles($styles);
      }
      // echo "Content of $name:<br>";
      // echo $contents;
      // echo "<br><br>";
    }
    $document->generate(__DIR__);

    $zip->close();
  }
  

}
