<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a UnderlineWeight Attribute
 */
trait UnderlineWeightAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("UnderlineWeight")
     */
    private float $underlineWeight;

    /**
     * Get the value of UnderlineWeight
     */
    public function getUnderlineWeight(): float
    {
        return $this->underlineWeight;
    }

    /**
     * Set the value of UnderlineWeight
     */
    public function setUnderlineWeight(float $underlineWeight): self
    {
        $this->underlineWeight = $underlineWeight;

        return $this;
    }
}
