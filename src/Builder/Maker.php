<?php
namespace Jvital\Idml\Builder;

use ZipArchive;

class Maker{
    const RAW_FOLDER = '/raw';
    
    private IdmlDocument $document;
    private ZipArchive $zipArchive;

    public function __construct(IdmlDocument $document){
        $this->document = $document;
        $filename = $document->getName() ;


        $zip_path = __DIR__."./$filename.zip";
        $zip = new ZipArchive();
      
        if ($zip->open($zip_path, ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE) !== TRUE) {
          die ("An error occurred creating your ZIP file.");
        }
        $zip->close();
        mkdir($this->getRootFolder(),0775, true);
        mkdir($this->getRawFolder(),0775, true);
    }

    private function getRootFolder():string{
        return $this->getDocument()->getTargetFolder().'/'.$this->getDocument()->getName();
    }

    private function getRawFolder():string{
        return $this->getRootFolder().self::RAW_FOLDER;
    }

    private function copyMetaInf(){
        mkdir($this->getRawFolder()."/META-INF",0775, true);
        copy(__DIR__."/rawFiles/META-INF/container.xml",$this->getRawFolder()."/META-INF/container.xml");
    }

    private function copyMimetype(){
        copy(__DIR__."/rawFiles/mimetype",$this->getRawFolder()."/mimetype");
    }

    public function exec(){
        $this->copyMetaInf();
        $this->copyMimetype();
    }


    /**
     * Get the value of document
     */
    public function getDocument(): IdmlDocument
    {
        return $this->document;
    }
}