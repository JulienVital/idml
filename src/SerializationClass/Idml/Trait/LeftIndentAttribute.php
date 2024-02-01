<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a LeftIndent Attribute
 */
trait LeftIndentAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("LeftIndent")
     */
    private string $leftIndent;

    /**
     * Get the value of leftIndent
     */
    public function getLeftIndent(): string
    {
        return $this->leftIndent;
    }

    /**
     * Set the value of leftIndent
     */
    public function setLeftIndent(string $leftIndent): self
    {
        $this->leftIndent = $leftIndent;

        return $this;
    }
}
