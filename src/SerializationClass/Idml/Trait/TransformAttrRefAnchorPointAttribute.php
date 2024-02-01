<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a TransformAttrRefAnchorPoint Attribute
 */
trait TransformAttrRefAnchorPointAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("TransformAttrRefAnchorPoint")
     */
    private string $transformAttrRefAnchorPoint;

    /**
     * Get the value of transformAttrRefAnchorPoint
     */
    public function getTransformAttrRefAnchorPoint(): string
    {
        return $this->transformAttrRefAnchorPoint;
    }

    /**
     * Set the value of transformAttrRefAnchorPoint
     */
    public function setTransformAttrRefAnchorPoint(string $transformAttrRefAnchorPoint): self
    {
        $this->transformAttrRefAnchorPoint = $transformAttrRefAnchorPoint;

        return $this;
    }
}
