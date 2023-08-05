<?php
namespace Jvital\Idml\Converter;

use Jvital\Idml\Builder\IdmlDocument;
use Jvital\Idml\SerializationClass\Json\Document;

class Converter{
    
    public function getJson(IdmlDocument $idmlDocument):Document{

        $jsonDocument = new Document();
        $jsonDocument->setName($idmlDocument->getName());
        $jsonDocument->addPages($idmlDocument->getPages());
        return $jsonDocument;
    }

    public function getIdml(Document $jsonDocument):IdmlDocument{

        $idmlDocument = new IdmlDocument($jsonDocument->getName());
        $idmlDocument->addPages($jsonDocument->getPages());
        return $idmlDocument;
    }
}