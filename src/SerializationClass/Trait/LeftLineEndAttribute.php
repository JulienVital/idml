<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a LeftLineEnd Attribute
 */
trait LeftLineEndAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("LeftLineEnd")
     */
    private string $leftLineEnd;

    /**
     * Get the value of leftLineEnd
     */
    public function getLeftLineEnd(): string
    {
        return $this->leftLineEnd;
    }

    /**
     * Set the value of leftLineEnd
     */
    public function setLeftLineEnd(string $leftLineEnd): self
    {
        $this->leftLineEnd = $leftLineEnd;

        return $this;
    }
}
