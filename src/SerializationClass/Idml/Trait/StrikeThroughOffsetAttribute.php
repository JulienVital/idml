<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a StrikeThroughOffset Attribute
 */
trait StrikeThroughOffsetAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("StrikeThroughOffset")
     */
    private string $strikeThroughOffset;

    /**
     * Get the value of StrikeThroughOffset
     */
    public function getStrikeThroughOffset(): string
    {
        return $this->strikeThroughOffset;
    }

    /**
     * Set the value of StrikeThroughOffset
     */
    public function setStrikeThroughOffset(string $strikeThroughOffset): self
    {
        $this->strikeThroughOffset = $strikeThroughOffset;

        return $this;
    }
}
