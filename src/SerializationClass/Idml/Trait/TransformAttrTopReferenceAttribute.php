<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a TransformAttrTopReference Attribute
 */
trait TransformAttrTopReferenceAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("TransformAttrTopReference")
     */
    private string $transformAttrTopReference;

    /**
     * Get the value of transformAttrTopReference
     */
    public function getTransformAttrTopReference(): string
    {
        return $this->transformAttrTopReference;
    }

    /**
     * Set the value of transformAttrTopReference
     */
    public function setTransformAttrTopReference(string $transformAttrTopReference): self
    {
        $this->transformAttrTopReference = $transformAttrTopReference;

        return $this;
    }
}
