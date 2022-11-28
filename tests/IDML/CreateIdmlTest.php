<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Builder\IdmlDocument;
use Jvital\Idml\SerializationClass\Designmap\Designmap;
use PHPUnit\Framework\TestCase;

class CreateIdmlTest extends TestCase{

  const TARGET_FOLDER = './temp';

  public function __construct(){
    parent::__construct();
  }

  protected function tearDown():void{
    $this->deleteRecursiveFolder(self::TARGET_FOLDER);
  }
  private function generateBaseDocument(string $nameDocument):IdmlDocument{

    $idml = new IdmlDocument();
    $idml->setName($nameDocument);
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

  public function testCreationFolderRawFolder(){
    $namefile = 'testFile';

    $this->generateBaseDocument($namefile);
    
    $this->assertTrue(is_dir("./temp/$namefile/raw"));
  }

  public function testMetaInf(){
    $namefile = 'testFile';

    $this->generateBaseDocument($namefile);
    
    $this->assertTrue(is_dir(self::TARGET_FOLDER."/$namefile/raw/META-INF"));
  }

  public function testMetaInfContainer(){
    $namefile = 'testFile';

    $this->generateBaseDocument($namefile);
    
    $this->assertTrue(file_exists(self::TARGET_FOLDER."/$namefile/raw/META-INF/container.xml"));
  }

  public function testMimetype(){
    $namefile = 'testFile';

    $this->generateBaseDocument($namefile);
    
    $this->assertTrue(file_exists(self::TARGET_FOLDER."/$namefile/raw/mimetype"));
  }
}
