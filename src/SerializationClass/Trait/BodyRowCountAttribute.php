<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add a BodyRowCount Attribute
 * range 0-25
 */
trait BodyRowCountAttribute {
    
    /**
     * @SerializedName("BodyRowCount")
     * @XmlAttribute
     */
    private int $bodyRowCount;


    /**
     * Get the value of bodyRowCount
     */
    public function getBodyRowCount(): int
    {
        return $this->bodyRowCount;
    }

    /**
     * Set the value of bodyRowCount
     */
    public function setBodyRowCount(int $bodyRowCount): self
    {
        $this->bodyRowCount = $bodyRowCount;

        return $this;
    }
}
