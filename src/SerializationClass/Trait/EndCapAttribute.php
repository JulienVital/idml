<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a EndCap Attribute
 */
trait EndCapAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("EndCap")
     */
    private string $endCap;

    /**
     * Get the value of endCap
     */
    public function getEndCap(): string
    {
        return $this->endCap;
    }

    /**
     * Set the value of endCap
     */
    public function setEndCap(string $endCap): self
    {
        $this->endCap = $endCap;

        return $this;
    }
}
