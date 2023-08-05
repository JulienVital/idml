<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add StrokeWeight value 
 */
trait StrokeWeightAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("StrokeWeight")
     */
    private float $strokeWeight;

    /**
     * Get the value of strokeWeight
     */
    public function getStrokeWeight(): float
    {
        return $this->strokeWeight;
    }

    /**
     * Set the value of strokeWeight
     */
    public function setStrokeWeight(float $strokeWeight): self
    {
        $this->strokeWeight = $strokeWeight;

        return $this;
    }
}
