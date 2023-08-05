<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add CornerRadius Attribute
 */
trait CornerRadiusAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("CornerRadius")
     */
    private int $cornerRadius;


    /**
     * Get the value of cornerRadius
     */
    public function getCornerRadius(): int
    {
        return $this->cornerRadius;
    }

    /**
     * Set the value of cornerRadius
     */
    public function setCornerRadius(int $cornerRadius): self
    {
        $this->cornerRadius = $cornerRadius;

        return $this;
    }
}
