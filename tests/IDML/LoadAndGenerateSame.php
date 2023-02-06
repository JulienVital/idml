<?php

use Jvital\Idml\Builder\Loader;

use PHPUnit\Framework\TestCase;


class LoadAndGenerateSame extends TestCase{


  public function testLoadIdml(){
    $idmlFileBase = __DIR__ ."/expects/Minimalist Magazine Layout.idml";

    $loader = new Loader();
    $document = $loader->load($idmlFileBase);
    $document->generate(__DIR__);

    $idmlZipBase = new ZipArchive;
    $idmlZipBase->open($idmlFileBase);

    $zipGenerated = new ZipArchive;
    $zipGenerated->open(__DIR__ ."/Minimalist Magazine Layout.idml");
    $listFiles=[
      'Resources/Fonts.xml',
      'Resources/Graphic.xml',
      'Resources/Styles.xml',
      'Spreads/Spread_u4ad.xml',
      'Spreads/Spread_u5f6.xml',
      'Stories/Story_u1b4.xml',
      'Stories/Story_u1ca.xml',
      'XML/BackingStory.xml',
      'XML/Tags.xml'
    ];

    foreach ($listFiles as $nameFile) {
      $expectContent = $idmlZipBase->getFromName($nameFile);
      $generatedContent = $zipGenerated->getFromName($nameFile);
      $this->assertXmlStringEqualsXmlString($generatedContent, $expectContent,"$nameFile Test");
    }

    unlink( __DIR__ ."/Minimalist Magazine Layout.idml");
  }
  

}
