<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add Ligatures value 
 */
trait LigaturesAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("Ligatures")
     */
    private bool $ligatures;


    /**
     * Get the value of ligatures
     */
    public function isLigatures(): bool
    {
        return $this->ligatures;
    }

    /**
     * Set the value of ligature
     */
    public function setLigatures(bool $ligatures): self
    {
        $this->ligatures = $ligatures;

        return $this;
    }
}
