<?php

use Jvital\Idml\Builder\IdmlDocument;
use Jvital\Idml\Converter\Converter;
use Jvital\Idml\JsonClass\Document;
use Jvital\Idml\JsonClass\Page;
use PHPUnit\Framework\TestCase;


class ConvertDocumentTest extends TestCase{

    public function testConvertFromIdmlDocumentName(){
        $documentName = "Document name";

        $idmlDocument = new IdmlDocument($documentName);

        $converter = new Converter();

        $jsonDocument = $converter->getJson($idmlDocument);
        $jsonExpect = new Document();
        $jsonExpect->setName($documentName);
        $this->assertEquals($jsonDocument, $jsonExpect);
    }

    public function testConvertFromJsonDocumentName(){
        
        $documentName = "Document name";
        $jsonDocument = new Document();
        $jsonDocument->setName($documentName);

        $converter = new Converter();

        $idmlDocumentConverted = $converter->getIdml($jsonDocument);

        $idmlExpect = new IdmlDocument($documentName);
        $this->assertEquals($idmlExpect, $idmlDocumentConverted);

    }

    public function testConvertFromJsonSpreadCount(){
        
        $documentName = "Document name";
        $jsonDocument = new Document();
        $jsonDocument->setName($documentName);
        $jsonDocument->setPages([new Page(), new Page(), new Page()]);
        $converter = new Converter();

        $idmlDocumentConverted = $converter->getIdml($jsonDocument);

        $this->assertEquals(count($idmlDocumentConverted->getSpreads()),2);

    }

    public function testConvertFromJsonSpreadAddedInDesignMap(){
        
        $documentName = "Document name";
        $jsonDocument = new Document();
        $jsonDocument->setName($documentName);
        $jsonDocument->setPages([new Page(), new Page(), new Page(),new Page()]);
        $converter = new Converter();

        $idmlDocumentConverted = $converter->getIdml($jsonDocument);
            //todo test
        $this->assertEquals(count($idmlDocumentConverted->getDesignMap()->getSpread()),3);

    }

    public function testTODO(){
        
        // make test for check number of spread when add page
        // first page binding location 0 page count 1
        // other binding 1 page count 2
        $this->assertTrue(false);
    }
}
