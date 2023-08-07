<?php
namespace Jvital\Idml\Builder\Idml;

use Jvital\Idml\SerializationClass\Idml\Stories\Story;
use Jvital\Idml\SerializationClass\Idml\Stories\StoryIdpkg;

class StoryBuilder{

    private Story $story;

    public function __construct()
    {
        $this->story = new Story();
    }

    public function build(){
        return new StoryIdpkg($this->story);
    }

    public function setId(string $id){
        $this->story->setId($id);
        return $this;
    }
}