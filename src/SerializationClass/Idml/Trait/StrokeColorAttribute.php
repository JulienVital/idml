<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add StrokeColor value 
 */
trait StrokeColorAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("StrokeColor")
     */
    private string $strokeColor;


    /**
     * Get the value of strokeColor
     */
    public function getStrokeColor(): string
    {
        return $this->strokeColor;
    }

    /**
     * Set the value of strokeColor
     */
    public function setStrokeColor(string $strokeColor): self
    {
        $this->strokeColor = $strokeColor;

        return $this;
    }
}
