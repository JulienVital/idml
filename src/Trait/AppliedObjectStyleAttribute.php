<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a AppliedObjectStyle Attribute
 * default value is true
 */
trait AppliedObjectStyleAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("AppliedObjectStyle")
     */
    private string $appliedObjectStyleAttribute;


    /**
     * Get the value of appliedObjectStyleAttribute
     */
    public function getAppliedObjectStyleAttribute(): string
    {
        return $this->appliedObjectStyleAttribute;
    }

    /**
     * Set the value of appliedObjectStyleAttribute
     */
    public function setAppliedObjectStyleAttribute(string $appliedObjectStyleAttribute): self
    {
        $this->appliedObjectStyleAttribute = $appliedObjectStyleAttribute;

        return $this;
    }
}
