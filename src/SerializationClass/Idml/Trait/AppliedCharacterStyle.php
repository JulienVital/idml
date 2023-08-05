<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a AppliedCharacterStyle Attribute
 * default value is true
 */
trait AppliedCharacterStyle {
    
    /**
     * @XmlAttribute
     * @SerializedName("AppliedCharacterStyle")
     */
    private string $appliedCharacterStyle;


    /**
     * Get the value of appliedCharacterStyle
     */
    public function getAppliedCharacterStyle(): string
    {
        return $this->appliedCharacterStyle;
    }

    /**
     * Set the value of appliedCharacterStyle
     */
    public function setAppliedCharacterStyle(string $appliedCharacterStyle): self
    {
        $this->appliedCharacterStyle = $appliedCharacterStyle;

        return $this;
    }
}
