<?php
namespace Jvital\Idml\Builder\Json;

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\JsonClass\Document;

class Loader{

    public function load(string $jsonFile):Document{
        $serializer = SerializerBuilder::create()->build();
        $documentDeserialized = $serializer->deSerialize($jsonFile, Document::class,'json');
        return $documentDeserialized;
    }


    public function export(Document $document):string{
        $serializer = SerializerBuilder::create()->build();
        $documentDeserialized = $serializer->serialize($document,'json');
        return $documentDeserialized;
    }
}