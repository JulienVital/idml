<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\Type;
use Jvital\Idml\SerializationClass\Spread\TextFrame as SpreadTextFrame;

/**
 * This trait add a TextFrame 
 */
trait TextFrame {

    /**
    * @Type("array<Jvital\Idml\SerializationClass\Spread\TextFrame>")
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