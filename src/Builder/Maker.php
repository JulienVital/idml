<?php
namespace Jvital\Idml\Builder;

use Exception;
use ZipArchive;

class Maker{
    const RAW_FOLDER = '/raw';
    
    private IdmlDocument $document;

    public function __construct(IdmlDocument $document, $targetFolder){
        $this->document = $document;
        $this->targetFolder = $targetFolder;
        mkdir($this->getRootFolder(),0775, true);
        mkdir($this->getRawFolder(),0775, true);
    }

    private function getRootFolder():string{
        return $this->targetFolder.'/'.$this->getDocument()->getName();
    }

    private function getRawFolder():string{
        return $this->getRootFolder().self::RAW_FOLDER;
    }


    public function exec(){
        
        $document =$this->document ; 
        $filename = $document->getName() ;

        $zip = new ZipArchive(); 
        if($zip->open($this->targetFolder."/$filename.idml", ZipArchive::CREATE) == TRUE)
        {
        $zip->addFile(__DIR__."/rawFiles/META-INF/container.xml", "META-INF/container.xml");
        $zip->addFile(__DIR__."/rawFiles/mimetype", "mimetype");

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