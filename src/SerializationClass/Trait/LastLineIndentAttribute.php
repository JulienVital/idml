<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a LastLineIndent Attribute
 */
trait LastLineIndentAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("LastLineIndent")
     */
    private string $lastLineIndent;

    /**
     * Get the value of lastLineIndent
     */
    public function getLastLineIndent(): string
    {
        return $this->lastLineIndent;
    }

    /**
     * Set the value of lastLineIndent
     */
    public function setLastLineIndent(string $lastLineIndent): self
    {
        $this->lastLineIndent = $lastLineIndent;

        return $this;
    }
}
