<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a ItemTransform Attribute
 * default value is null
 */
trait ItemTransformAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("ItemTransform")
     */
    private ?string $itemTransform = "1 0 0 1 0 0";



    /**
     * Get the value of itemTransform
     */
    public function getItemTransform(): ?string
    {
        return $this->itemTransform;
    }

    /**
     * Set the value of itemTransform
     */
    public function setItemTransform(?string $itemTransform): self
    {
        $this->itemTransform = $itemTransform;

        return $this;
    }
}