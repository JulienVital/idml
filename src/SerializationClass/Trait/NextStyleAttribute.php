<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a NextStyle Attribute
 */
trait NextStyleAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("NextStyle")
     */
    private string $nextStyle;


    /**
     * Get the value of nextStyle
     */
    public function getNextStyle(): string
    {
        return $this->nextStyle;
    }

    /**
     * Set the value of nextStyle
     */
    public function setNextStyle(string $nextStyle): self
    {
        $this->nextStyle = $nextStyle;

        return $this;
    }
}
