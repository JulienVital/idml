<?php
namespace Jvital\Idml\SerializationClass\Trait;

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
    private int $strokeWeight;

    /**
     * Get the value of strokeWeight
     */
    public function getStrokeWeight(): int
    {
        return $this->strokeWeight;
    }

    /**
     * Set the value of strokeWeight
     */
    public function setStrokeWeight(int $strokeWeight): self
    {
        $this->strokeWeight = $strokeWeight;

        return $this;
    }
}
