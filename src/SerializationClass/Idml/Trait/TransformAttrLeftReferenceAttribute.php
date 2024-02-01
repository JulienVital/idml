<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a TransformAttrLeftReference Attribute
 */
trait TransformAttrLeftReferenceAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("TransformAttrLeftReference")
     */
    private string $transformAttrLeftReference;

    /**
     * Get the value of transformAttrLeftReference
     */
    public function getTransformAttrLeftReference(): string
    {
        return $this->transformAttrLeftReference;
    }

    /**
     * Set the value of transformAttrLeftReference
     */
    public function setTransformAttrLeftReference(string $transformAttrLeftReference): self
    {
        $this->transformAttrLeftReference = $transformAttrLeftReference;

        return $this;
    }
}
