<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a AppliedTableStyle Attribute
 */
trait AppliedTableStyleAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("AppliedTableStyle")
     */
    private string $appliedTableStyle;

    /**
     * Get the value of appliedTableStyle
     */
    public function getAppliedTableStyle(): string
    {
        return $this->appliedTableStyle;
    }

    /**
     * Set the value of appliedTableStyle
     */
    public function setAppliedTableStyle(string $appliedTableStyle): self
    {
        $this->appliedTableStyle = $appliedTableStyle;

        return $this;
    }
}
