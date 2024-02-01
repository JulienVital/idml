<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a StrikeThroughWeight Attribute
 */
trait StrikeThroughWeightAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("StrikeThroughWeight")
     */
    private string $strikeThroughWeight;

    /**
     * Get the value of strikeThroughWeight
     */
    public function getStrikeThroughWeight(): string
    {
        return $this->strikeThroughWeight;
    }

    /**
     * Set the value of strikeThroughWeight
     */
    public function setStrikeThroughWeight(string $strikeThroughWeight): self
    {
        $this->strikeThroughWeight = $strikeThroughWeight;

        return $this;
    }
}
