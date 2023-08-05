<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a TopRightCornerRadius Attribute
 */
trait TopRightCornerRadiusAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("TopRightCornerRadius")
     */
    private float $topRightCornerRadius;

    /**
     * Get the value of topRightCornerRadius
     */
    public function getTopRightCornerRadius(): float
    {
        return $this->topRightCornerRadius;
    }

    /**
     * Set the value of topRightCornerRadius
     */
    public function setTopRightCornerRadius(float $topRightCornerRadius): self
    {
        $this->topRightCornerRadius = $topRightCornerRadius;

        return $this;
    }
}
