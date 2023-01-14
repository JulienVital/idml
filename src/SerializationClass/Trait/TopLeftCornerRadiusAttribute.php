<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a TopLeftCornerRadius Attribute
 */
trait TopLeftCornerRadiusAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("TopLeftCornerRadius")
     */
    private string $topLeftCornerRadius;

    /**
     * Get the value of topLeftCornerRadius
     */
    public function getTopLeftCornerRadius(): string
    {
        return $this->topLeftCornerRadius;
    }

    /**
     * Set the value of topLeftCornerRadius
     */
    public function setTopLeftCornerRadius(string $topLeftCornerRadius): self
    {
        $this->topLeftCornerRadius = $topLeftCornerRadius;

        return $this;
    }
}
