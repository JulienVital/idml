<?php

use Jvital\Idml\SerializationClass\Idml\IdmlDocument;
use Jvital\Idml\Converter\Converter;
use Jvital\Idml\SerializationClass\Json\Document;
use Jvital\Idml\SerializationClass\Json\PageJson;
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
        $jsonDocument->setPages([new PageJson(), new PageJson(), new PageJson()]);
        $converter = new Converter();

        $idmlDocumentConverted = $converter->getIdml($jsonDocument);

        $this->assertEquals(count($idmlDocumentConverted->getSpreads()),2);

    }

    public function testConvertFromJsonSpreadAddedInDesignMap(){
        
        $documentName = "Document name";
        $jsonDocument = new Document();
        $jsonDocument->setName($documentName);
        $jsonDocument->setPages([new PageJson(), new PageJson(), new PageJson(),new PageJson()]);
        $converter = new Converter();

        $idmlDocumentConverted = $converter->getIdml($jsonDocument);
        $this->assertEquals(count($idmlDocumentConverted->getDesignMap()->getSpread()),3);

    }

    public function testConvertFromIdmlJsonCountPage(){
        $documentName = "Document name";

        $idmlDocument = new IdmlDocument($documentName);

        $idmlDocument->addPages([new PageJson(),new PageJson(),new PageJson()]);

        $converter = new Converter();

        $jsonDocument = $converter->getJson($idmlDocument);

        $this->assertEquals(count($jsonDocument->getPages()), 3);
    }

    public function testConvertFromIdmlJsonCountPage2(){
        $documentName = "Document name";

        $idmlDocument = new IdmlDocument($documentName);

        $idmlDocument->addPages([
            new PageJson(),
            new PageJson(),
            new PageJson(),
            new PageJson(),
            new PageJson(),
            new PageJson(),
            new PageJson(),
            new PageJson(),
            new PageJson(),
            new PageJson()]);

        $converter = new Converter();

        $jsonDocument = $converter->getJson($idmlDocument);

        $this->assertEquals(count($jsonDocument->getPages()), 10);
    }

}
