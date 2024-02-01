<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add Hyphenation value 
 */
trait HyphenationAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("Hyphenation")
     */
    private bool $hyphenation;


    /**
     * Get the value of hyphenation
     */
    public function isHyphenation(): bool
    {
        return $this->hyphenation;
    }

    /**
     * Set the value of hyphenation
     */
    public function setHyphenation(bool $hyphenation): self
    {
        $this->hyphenation = $hyphenation;

        return $this;
    }
}
