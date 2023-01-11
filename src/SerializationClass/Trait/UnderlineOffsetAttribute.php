<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a UnderlineOffset Attribute
 */
trait UnderlineOffsetAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("UnderlineOffset")
     */
    private string $underlineOffset;

    /**
     * Get the value of UnderlineOffset
     */
    public function getUnderlineOffset(): string
    {
        return $this->underlineOffset;
    }

    /**
     * Set the value of UnderlineOffset
     */
    public function setUnderlineOffset(string $underlineOffset): self
    {
        $this->underlineOffset = $underlineOffset;

        return $this;
    }
}
