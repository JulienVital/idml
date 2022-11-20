<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a FirstLine Attribute
 */
trait FirstLineIndentAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("FirstLineIndent")
     */
    private string $firstLineIndentAttribute;

    /**
     * Get the value of firstLineIndentAttribute
     */
    public function getFirstLineIndentAttribute(): string
    {
        return $this->firstLineIndentAttribute;
    }

    /**
     * Set the value of firstLineIndentAttribute
     */
    public function setFirstLineIndentAttribute(string $firstLineIndentAttribute): self
    {
        $this->firstLineIndentAttribute = $firstLineIndentAttribute;

        return $this;
    }
}
