<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a TransformAttrRefAnchorPoint Attribute
 */
trait TransformAttrRefAnchorPointAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("TransformAttrRefAnchorPoint")
     */
    private string $transformAttrRefAnchorPointAttribute;

    /**
     * Get the value of transformAttrRefAnchorPointAttribute
     */
    public function getTransformAttrRefAnchorPointAttribute(): string
    {
        return $this->transformAttrRefAnchorPointAttribute;
    }

    /**
     * Set the value of transformAttrRefAnchorPointAttribute
     */
    public function setTransformAttrRefAnchorPointAttribute(string $transformAttrRefAnchorPointAttribute): self
    {
        $this->transformAttrRefAnchorPointAttribute = $transformAttrRefAnchorPointAttribute;

        return $this;
    }
}
