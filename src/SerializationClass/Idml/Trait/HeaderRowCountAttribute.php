<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add a HeaderRowCount Attribute
 * range 0-25
 */
trait HeaderRowCountAttribute
{
    
    /**
     * @SerializedName("HeaderRowCount")
     * @XmlAttribute
     */
    private int $headerRowCount;

    /**
     * Get the value of headerRowCount
     */
    public function getHeaderRowCount(): int
    {
        return $this->headerRowCount;
    }

    /**
     * Set the value of headerRowCount
     */
    public function setHeaderRowCount(int $headerRowCount): self
    {
        $this->headerRowCount = $headerRowCount;

        return $this;
    }
}
