<?php

use Jvital\Idml\Builder\Idml\SpreadBuilder;
use Jvital\Idml\SerializationClass\Idml\Spread\SpreadIdpkg;
use Jvital\Idml\SerializationClass\Idml\Stories\StoryIdpkg;
use PHPUnit\Framework\TestCase;


class SpreadBuilderTest extends TestCase{

    public function testBuilderReturnSpread(){

        $builder = new SpreadBuilder();
        $spread = $builder->build();
        $this->assertTrue($spread::class === SpreadIdpkg::class);
    }

    public function testWip(){
        $this->assertTrue(false);
    }
}
