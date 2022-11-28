<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Builder\IdmlDocument;
use Jvital\Idml\SerializationClass\Designmap\Designmap;
use PHPUnit\Framework\TestCase;

class CreateIdmlTest extends TestCase{



  public function __construct(){
    parent::__construct();
  }

  function testCreationFolder(){
    $namefile = 'testFile';
    $targetFolder = './temp';

    $idml = new IdmlDocument();
    $idml->setName($namefile);
    $idml->generate($targetFolder);
    
    $this->assertTrue(is_dir("./temp/$namefile"));
    
    $this->deleteRecursiveFolder($targetFolder);
  }

  private function deleteRecursiveFolder(string $directory): bool{

    array_map(fn (string $file) => is_dir($file) ? $this->deleteRecursiveFolder($file) : unlink($file), glob($directory . '/' . '*'));

    return rmdir($directory);
  }
}
