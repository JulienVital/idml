<?php
namespace Jvital\Idml\Builder;

use Exception;
use JMS\Serializer\SerializerBuilder;
use ZipArchive;

class Maker{
    const RAW_FOLDER = '/raw';
    
    private IdmlDocument $document;

    public function __construct(IdmlDocument $document, $targetFolder){
        $this->document = $document;
        $this->targetFolder = $targetFolder;
        mkdir($this->getRootFolder(),0775, true);
    }

    private function getRootFolder():string{
        return $this->targetFolder.'/'.$this->getDocument()->getName();
    }


    public function exec(){
        
        $document =$this->document ; 
        $filename = $document->getName() ;

        $zip = new ZipArchive(); 
        $serializer = SerializerBuilder::create()->build();
        
        if($zip->open($this->targetFolder."/$filename.idml", ZipArchive::CREATE) == TRUE)
        {
            $zip->addFile(__DIR__."/rawFiles/META-INF/container.xml", "META-INF/container.xml");
            $zip->addFile(__DIR__."/rawFiles/mimetype", "mimetype");
            $styleSerialized = $serializer->serialize($this->document->getBackingStory(), 'xml');
            $zip->addFromString("XML/BackingStory.xml", $styleSerialized);
            $styleSerialized = $serializer->serialize($this->document->getFonts(), 'xml');
            $zip->addFromString("Ressources/Fonts.xml", $styleSerialized);
            $styleSerialized = $serializer->serialize($this->document->getGraphic(), 'xml');
            $zip->addFromString("Ressources/Graphic.xml", $styleSerialized);
            $styleSerialized = $serializer->serialize($this->document->getStyles(), 'xml');
            $zip->addFromString("Ressources/Styles.xml", $styleSerialized);
            $zip->close();
        }
        else
        {
            throw new Exception("cant open Zip file");
        }
    }


    /**
     * Get the value of document
     */
    public function getDocument(): IdmlDocument
    {
        return $this->document;
    }
}