<?php
namespace Jvital\Idml\SerializationClass\Trait;

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
    private string $underlineWeight;

    /**
     * Get the value of UnderlineWeight
     */
    public function getUnderlineWeight(): string
    {
        return $this->UnderlineWeight;
    }

    /**
     * Set the value of UnderlineWeight
     */
    public function setUnderlineWeight(string $underlineWeight): self
    {
        $this->underlineWeight = $underlineWeight;

        return $this;
    }
}
