<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a TopLeftCornerRadius Attribute
 */
trait TopLeftCornerRadiusAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("TopLeftCornerRadius")
     */
    private float $topLeftCornerRadius;

    /**
     * Get the value of topLeftCornerRadius
     */
    public function getTopLeftCornerRadius(): float
    {
        return $this->topLeftCornerRadius;
    }

    /**
     * Set the value of topLeftCornerRadius
     */
    public function setTopLeftCornerRadius(float $topLeftCornerRadius): self
    {
        $this->topLeftCornerRadius = $topLeftCornerRadius;

        return $this;
    }
}
