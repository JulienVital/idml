<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a HorizontalScale Attribute
 */
trait HorizontalScaleAttribute {

    /**
     * @XmlAttribute
     * @SerializedName("HorizontalScale")
     */
    private int $horizontalScale;

    /**
     * Get the value of horizontalScale
     */
    public function getHorizontalScale(): int
    {
        return $this->horizontalScale;
    }

    /**
     * Set the value of horizontalScale
     */
    public function setHorizontalScale(int $horizontalScale): self
    {
        $this->horizontalScale = $horizontalScale;

        return $this;
    }
}