<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a TransformAttrLeftReference Attribute
 */
trait TransformAttrLeftReferenceAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("TransformAttrLeftReference")
     */
    private string $transformAttrLeftReferenceAttribute;

    /**
     * Get the value of transformAttrLeftReferenceAttribute
     */
    public function getTransformAttrLeftReferenceAttribute(): string
    {
        return $this->transformAttrLeftReferenceAttribute;
    }

    /**
     * Set the value of transformAttrLeftReferenceAttribute
     */
    public function setTransformAttrLeftReferenceAttribute(string $transformAttrLeftReferenceAttribute): self
    {
        $this->transformAttrLeftReferenceAttribute = $transformAttrLeftReferenceAttribute;

        return $this;
    }
}
