<?php
namespace Jvital\Idml\Builder\Idml;

use Jvital\Idml\SerializationClass\Idml\Stories\CharacterStyleRange;
use Jvital\Idml\SerializationClass\Idml\Stories\ParagraphStyleRange;
use Jvital\Idml\SerializationClass\Idml\Stories\Story;
use Jvital\Idml\SerializationClass\Idml\Stories\StoryIdpkg;

class StoryBuilder
{

    private Story $story;

    private ParagraphStyleRange $paragraph;

    private CharacterStyleRange $character;

    public function __construct()
    {
        $this->paragraph = new ParagraphStyleRange();
        $this->story = new Story();
        $this->character = new CharacterStyleRange();

        $this->story->setParagraphStyleRange($this->paragraph);
        $this->paragraph->setCharacterStyleRange($this->character);
    }

    public function build()
    {
        return new StoryIdpkg($this->story);
    }

    public function setId(string $id)
    {
        $this->story->setId($id);
        return $this;
    }

    public function setParagraphStyle(string $paragraphStyle)
    {
        $this->paragraph->setAppliedParagraphStyle($paragraphStyle);
        return $this;
    }

    public function setContent(string $content)
    {
        $this->character->setContent($content);
        return $this;
    }
}