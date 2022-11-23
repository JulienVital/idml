<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a AppliedCellStyle Attribute
 */
trait AppliedCellStyleAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("AppliedCellStyle")
     */
    private string $appliedCellStyleAttribute;


    /**
     * Get the value of appliedCellStyleAttribute
     */
    public function getAppliedCellStyleAttribute(): string
    {
        return $this->appliedCellStyleAttribute;
    }

    /**
     * Set the value of appliedCellStyleAttribute
     */
    public function setAppliedCellStyleAttribute(string $appliedCellStyleAttribute): self
    {
        $this->appliedCellStyleAttribute = $appliedCellStyleAttribute;

        return $this;
    }
}
