<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a Justification Attribute
 */
trait JustificationAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("Justification")
     */
    private string $justification;

    /**
     * Get the value of justification
     */
    public function getJustification(): string
    {
        return $this->justification;
    }

    /**
     * Set the value of justification
     */
    public function setJustification(string $justification): self
    {
        $this->justification = $justification;

        return $this;
    }
}
