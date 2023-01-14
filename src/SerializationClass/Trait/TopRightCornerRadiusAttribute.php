<?php
namespace Jvital\Idml\SerializationClass\Trait;

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
    private string $topRightCornerRadius;

    /**
     * Get the value of topRightCornerRadius
     */
    public function getTopRightCornerRadius(): string
    {
        return $this->topRightCornerRadius;
    }

    /**
     * Set the value of topRightCornerRadius
     */
    public function setTopRightCornerRadius(string $topRightCornerRadius): self
    {
        $this->topRightCornerRadius = $topRightCornerRadius;

        return $this;
    }
}
