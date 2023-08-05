<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a RightLineEnd Attribute
 */
trait RightLineEndAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("RightLineEnd")
     */
    private string $rightLineEnd;

    /**
     * Get the value of rightLineEnd
     */
    public function getRightLineEnd(): string
    {
        return $this->rightLineEnd;
    }

    /**
     * Set the value of rightLineEnd
     */
    public function setRightLineEnd(string $rightLineEnd): self
    {
        $this->rightLineEnd = $rightLineEnd;

        return $this;
    }
}
