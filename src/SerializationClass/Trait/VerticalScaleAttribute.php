<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a VerticalScale Attribute
 */
trait VerticalScaleAttribute {

    /**
     * @XmlAttribute
     * @SerializedName("VerticalScale")
     */
    private int $verticalScale;

    /**
     * Get the value of verticalScale
     */
    public function getVerticalScale(): int
    {
        return $this->verticalScale;
    }

    /**
     * Set the value of verticalScale
     */
    public function setVerticalScale(int $verticalScale): self
    {
        $this->verticalScale = $verticalScale;

        return $this;
    }
}