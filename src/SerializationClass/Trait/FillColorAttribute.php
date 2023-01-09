<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a Locked Attribute
 * default value is false
 */
trait FillColorAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("FillColor")
     */
    private string $fillColor;


    /**
     * Get the value of fillColor
     */
    public function getFillColor(): string
    {
        return $this->fillColor;
    }

    /**
     * Set the value of fillColor
     */
    public function setFillColor(string $fillColor): self
    {
        $this->fillColor = $fillColor;

        return $this;
    }
}
