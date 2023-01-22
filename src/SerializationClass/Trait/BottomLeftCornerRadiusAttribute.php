<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a BottomLeftCornerRadius Attribute
 */
trait BottomLeftCornerRadiusAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("BottomLeftCornerRadius")
     */
    private int $bottomLeftCornerRadius;

    /**
     * Get the value of bottomLeftCornerRadius
     */
    public function getBottomLeftCornerRadius(): int
    {
        return $this->bottomLeftCornerRadius;
    }

    /**
     * Set the value of bottomLeftCornerRadius
     */
    public function setBottomLeftCornerRadius(int $bottomLeftCornerRadius): self
    {
        $this->bottomLeftCornerRadius = $bottomLeftCornerRadius;

        return $this;
    }
}
