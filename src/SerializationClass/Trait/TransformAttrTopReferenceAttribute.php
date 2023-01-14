<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a TransformAttrTopReference Attribute
 */
trait TransformAttrTopReferenceAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("TransformAttrTopReference")
     */
    private string $transformAttrTopReferenceAttribute;

    /**
     * Get the value of transformAttrTopReferenceAttribute
     */
    public function getTransformAttrTopReferenceAttribute(): string
    {
        return $this->transformAttrTopReferenceAttribute;
    }

    /**
     * Set the value of transformAttrTopReferenceAttribute
     */
    public function setTransformAttrTopReferenceAttribute(string $transformAttrTopReferenceAttribute): self
    {
        $this->transformAttrTopReferenceAttribute = $transformAttrTopReferenceAttribute;

        return $this;
    }
}
