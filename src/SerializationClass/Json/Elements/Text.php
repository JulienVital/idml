<?php

namespace Jvital\Idml\SerializationClass\Json\Elements;

class Text extends Element
{

    public function getType(): string
    {
        return "TEXT";
    }
}
