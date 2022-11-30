<?php
namespace Jvital\Idml\Builder;

class IdmlDocument{
    
    private string $name;


    public function __construct($name){
        $this->name= $name;
    }

    public function generate($targetFolder){
        $maker = new Maker($this, $targetFolder);

        $maker->exec();
    }
    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }


}