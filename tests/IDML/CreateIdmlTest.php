<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Builder\IdmlDocument;
use Jvital\Idml\SerializationClass\Designmap\Designmap;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\fileExists;

class CreateIdmlTest extends TestCase{

  const TARGET_FOLDER = './temp';

  public function __construct(){
    parent::__construct();
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


  public function testCreationFolder(){
    $namefile = 'testFile';

    $this->generateBaseDocument($namefile);
    
    $this->assertTrue(is_dir("./temp/$namefile"));
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
}
