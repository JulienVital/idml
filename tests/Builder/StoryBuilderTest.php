<?php

use Jvital\Idml\Builder\Idml\StoryBuilder;
use Jvital\Idml\SerializationClass\Idml\Stories\CharacterStyleRange;
use Jvital\Idml\SerializationClass\Idml\Stories\ParagraphStyleRange;
use Jvital\Idml\SerializationClass\Idml\Stories\Story;
use Jvital\Idml\SerializationClass\Idml\Stories\StoryIdpkg;
use PHPUnit\Framework\TestCase;


class StoryBuilderTest extends TestCase{

    public function testBuilderReturnStoryIdpkgClass(){

        $builder = new StoryBuilder();
        $story = $builder->build();
        $this->assertTrue($story::class === StoryIdpkg::class);
    }

    public function testStoryIdpkgHaveAstoryChild(){

        $builder = new StoryBuilder();
        $storyIdpkg = $builder->build();
        $this->assertTrue($storyIdpkg->getStory()::class === Story::class);
    }

    public function testStoryIdpkgHaveParagraphStyleRange(){

        $builder = new StoryBuilder();
        $storyIdpkg = $builder->build();
        $this->assertTrue($storyIdpkg->getStory()->getParagraphStyleRange()::class === ParagraphStyleRange::class);
    }

    public function testStoryIdpkgHaveCharacterStyleRange(){

        $builder = new StoryBuilder();
        $storyIdpkg = $builder->build();
        $this->assertTrue($storyIdpkg->getStory()->getParagraphStyleRange()->getCharacterStyleRange()::class === CharacterStyleRange::class);
    }

    public function testStorySetId(){

        $idExpect = "CustomId";
        $builder = new StoryBuilder();
        $builder->setId($idExpect);
        $storyIdpkg = $builder->build();
        $this->assertEquals($idExpect, $storyIdpkg->getStory()->getId());
    }

    public function testStorySetParagraphStyle(){

        $style = "testStyle";
        $builder = new StoryBuilder();
        $builder->setParagraphStyle($style);
        $storyIdpkg = $builder->build();
        $this->assertEquals($style, $storyIdpkg->getStory()->getParagraphStyleRange()->getAppliedParagraphStyle());
    }

    public function testStorySetContent(){

        $content = "testStyle";
        $builder = new StoryBuilder();
        $builder->setContent($content);
        $storyIdpkg = $builder->build();
        $this->assertEquals($content, $storyIdpkg->getStory()->getParagraphStyleRange()->getCharacterStyleRange()->getContent());
    }
}
