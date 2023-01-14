<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a BottomRightCornerRadius Attribute
 */
trait BottomRightCornerRadiusAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("BottomRightCornerRadius")
     */
    private string $bottomRightCornerRadius;

    /**
     * Get the value of bottomRightCornerRadius
     */
    public function getBottomRightCornerRadius(): string
    {
        return $this->bottomRightCornerRadius;
    }

    /**
     * Set the value of bottomRightCornerRadius
     */
    public function setBottomRightCornerRadius(string $bottomRightCornerRadius): self
    {
        $this->bottomRightCornerRadius = $bottomRightCornerRadius;

        return $this;
    }
}
