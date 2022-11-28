<?php
namespace Jvital\Idml\Builder;

class Maker{
    
    private IdmlDocument $document;

    public function __construct(IdmlDocument $document){
        $this->document = $document;
        mkdir($this->getRawFolder(),0777, true);
    }

    private function getRawFolder():string{
        return $this->getDocument()->getTargetFolder().'/'.$this->getDocument()->getName();
    }

    public function exec(){

    }


    /**
     * Get the value of document
     */
    public function getDocument(): IdmlDocument
    {
        return $this->document;
    }
}