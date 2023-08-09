<?php
namespace Jvital\Idml\Builder\Idml;

use Jvital\Idml\SerializationClass\Idml\Spread\Spread;
use Jvital\Idml\SerializationClass\Idml\Spread\SpreadIdpkg;


class SpreadBuilder{

    private Spread $spread;

    public function __construct()
    {
        $this->spread = new Spread(uniqid());
    }


    public function build(){
        return new SpreadIdpkg($this->spread);
    }

}