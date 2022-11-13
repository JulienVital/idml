<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Spread\TextFrame as SpreadTextFrame;

/**
 * This trait add a TextFrame 
 */
trait TextFrame {

    /**
     * @SerializedName("TextFrame")
     */
    private SpreadTextFrame $textFrame;



    /**
     * Get the value of textFrame
     */
    public function getTextFrame(): SpreadTextFrame
    {
        return $this->textFrame;
    }

    /**
     * Set the value of textFrame
     */
    public function setTextFrame(SpreadTextFrame $textFrame): self
    {
        $this->textFrame = $textFrame;

        return $this;
    }
}