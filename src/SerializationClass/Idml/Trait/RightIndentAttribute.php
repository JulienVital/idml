<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a RightIndent Attribute
 */
trait RightIndentAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("RightIndent")
     */
    private string $rightIndent;

    /**
     * Get the value of rightIndent
     */
    public function getRightIndent(): string
    {
        return $this->rightIndent;
    }

    /**
     * Set the value of rightIndent
     */
    public function setRightIndent(string $rightIndent): self
    {
        $this->rightIndent = $rightIndent;

        return $this;
    }
}
