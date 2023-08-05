<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\Type;
use Jvital\Idml\SerializationClass\Idml\Spread\TextFrame as SpreadTextFrame;

/**
 * This trait add a TextFrame 
 */
trait TextFrame {

    /**
    * @Type("array<Jvital\Idml\SerializationClass\Idml\Spread\TextFrame>")
    * @XmlList(inline = true, entry = "TextFrame")
    */
    private array $textFrame;



    /**
     * Get the value of textFrame
     */
    public function getTextFrame(): array
    {
        return $this->textFrame;
    }

    /**
     * Set the value of textFrame
     */
    public function setTextFrame(array $textFrame): self
    {
        $this->textFrame = $textFrame;

        return $this;
    }
}