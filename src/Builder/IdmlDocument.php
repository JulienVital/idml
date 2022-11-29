<?php
namespace Jvital\Idml\Builder;

class IdmlDocument{
    
    private string $name;

    private string $targetFolder;

    public function __construct($name){
        $this->name= $name;
    }

    public function generate($targetFolder){
        $this->targetFolder = $targetFolder;
        $maker = new Maker($this);

        $maker->exec();
    }
    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the value of targetFolder
     */
    public function getTargetFolder(): string
    {
        return $this->targetFolder;
    }

    /**
     * Set the value of targetFolder
     */
    public function setTargetFolder(string $targetFolder): self
    {
        $this->targetFolder = $targetFolder;

        return $this;
    }
}