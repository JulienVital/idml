<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a FirstLineIndent Attribute
 */
trait FirstLineIndentAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("FirstLineIndent")
     */
    private string $firstLineIndent;

    /**
     * Get the value of firstLineIndent
     */
    public function getFirstLineIndent(): string
    {
        return $this->firstLineIndent;
    }

    /**
     * Set the value of firstLineIndentAttribute
     */
    public function setFirstLineIndent(string $firstLineIndent): self
    {
        $this->firstLineIndent = $firstLineIndent;

        return $this;
    }
}
