<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add Ligatures value 
 */
trait LigatureAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("Ligatures")
     */
    private bool $ligatures;


    /**
     * Get the value of ligature
     */
    public function isLigature(): bool
    {
        return $this->ligatures;
    }

    /**
     * Set the value of ligature
     */
    public function setLigature(bool $ligatures): self
    {
        $this->ligatures = $ligatures;

        return $this;
    }
}
