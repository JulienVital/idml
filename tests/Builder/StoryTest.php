<?php

use Jvital\Idml\Builder\Idml\StoryBuilder;
use Jvital\Idml\SerializationClass\Idml\Stories\Story;
use Jvital\Idml\SerializationClass\Idml\Stories\StoryIdpkg;
use PHPUnit\Framework\TestCase;


class StoryTest extends TestCase{

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
}
