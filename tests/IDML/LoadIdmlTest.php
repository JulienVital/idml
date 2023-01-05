<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Builder\IdmlDocument;
use Jvital\Idml\SerializationClass\Spread\SpreadIdpkg;
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

      // echo "Content of $name:<br>";
      // echo $contents;
      // echo "<br><br>";
    }
    $document->generate(__DIR__);

    $zip->close();
  }
  

}
