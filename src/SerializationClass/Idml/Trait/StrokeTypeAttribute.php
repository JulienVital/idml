<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a StrokeType Attribute
 */
trait StrokeTypeAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("StrokeType")
     */
    private string $strokeType;

    /**
     * Get the value of strokeType
     */
    public function getStrokeType(): string
    {
        return $this->strokeType;
    }

    /**
     * Set the value of strokeType
     */
    public function setStrokeType(string $strokeType): self
    {
        $this->strokeType = $strokeType;

        return $this;
    }
}
