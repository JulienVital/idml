<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Builder\IdmlDocument;
use Jvital\Idml\SerializationClass\Designmap\IdpkgBackingStory;
use Jvital\Idml\SerializationClass\Ressources\Fonts\FontIdpkg;
use Jvital\Idml\SerializationClass\Ressources\Graphics\GraphicIdpkg;
use Jvital\Idml\SerializationClass\Ressources\Styles\StylesIdpkg;
use PHPUnit\Framework\TestCase;


class CreateEmptyIdmlTest extends TestCase{

  const TARGET_FOLDER = './temp/';

  protected function setUp():void{
    mkdir(self::TARGET_FOLDER,0775, true);

  }

  protected function tearDown():void{
    $this->deleteRecursiveFolder(self::TARGET_FOLDER);
  }

  private function generateBaseDocument(string $nameDocument):IdmlDocument{

    $idml = new IdmlDocument($nameDocument);
    $idml->generate(self::TARGET_FOLDER);
    return $idml;
  }
  
  private function deleteRecursiveFolder(string $directory): bool{

    array_map(fn (string $file) => is_dir($file) ? $this->deleteRecursiveFolder($file) : unlink($file), glob($directory . '/' . '*'));

    return rmdir($directory);
  }


  public function testCreationFile(){
    $namefile = 'testFile';

    $this->generateBaseDocument($namefile);
    
    $this->assertFileExists("./temp/$namefile.idml");
  }

  public function testMetaInfContainer(){
    $namefile = 'testFile';

    $this->generateBaseDocument($namefile);
    $containerXml = file_get_contents('zip://'.self::TARGET_FOLDER."/$namefile.idml#META-INF/container.xml");
    $this->assertEquals($containerXml, file_get_contents('src/Builder/rawFiles/META-INF/container.xml'));
  }

  public function testMimetype(){
    $namefile = 'testFile';

    $this->generateBaseDocument($namefile);
    $containerXml = file_get_contents('zip://'.self::TARGET_FOLDER."/$namefile.idml#mimetype");
    $this->assertEquals($containerXml, file_get_contents('src/Builder/rawFiles/mimetype'));
    
  }

  public function testBackingStory(){
    $namefile = 'testFile';

    $this->generateBaseDocument($namefile);
    $containerXml = file_get_contents('zip://'.self::TARGET_FOLDER."/$namefile.idml#XML/BackingStory.xml");
    $serializer = SerializerBuilder::create()->build();
    $backingStorySerialized = $serializer->serialize(new IdpkgBackingStory(), 'xml');
    $this->assertEquals($containerXml, $backingStorySerialized);
    
  }

  public function testFontIdpkg(){
    $namefile = 'testFile';

    $this->generateBaseDocument($namefile);
    $containerXml = file_get_contents('zip://'.self::TARGET_FOLDER."/$namefile.idml#Resources/Fonts.xml");
    $serializer = SerializerBuilder::create()->build();
    $fontSerialized = $serializer->serialize(new FontIdpkg(), 'xml');
    $this->assertEquals($containerXml, $fontSerialized);
    
  }

  public function testgraphicIdpkg(){
    $namefile = 'testFile';

    $this->generateBaseDocument($namefile);
    $containerXml = file_get_contents('zip://'.self::TARGET_FOLDER."/$namefile.idml#Resources/Graphic.xml");
    $serializer = SerializerBuilder::create()->build();
    $graphicSerialized = $serializer->serialize(new GraphicIdpkg(), 'xml');
    $this->assertEquals($containerXml, $graphicSerialized);
    
  }

  public function teststylesIdpkg(){
    $namefile = 'testFile';

    $this->generateBaseDocument($namefile);
    $containerXml = file_get_contents('zip://'.self::TARGET_FOLDER."/$namefile.idml#Resources/Styles.xml");
    $serializer = SerializerBuilder::create()->build();
    $stylesSerialized = $serializer->serialize(new StylesIdpkg(), 'xml');
    $this->assertEquals($containerXml, $stylesSerialized);
    
  }

  public function testLaunchExceptionIfCantOpen(){
    $namefile = 'testFile';

    $idml = new IdmlDocument($namefile);

    $this->expectExceptionMessage('Cant create ZipFile');
    $idml->generate('/');
    
  }
}
