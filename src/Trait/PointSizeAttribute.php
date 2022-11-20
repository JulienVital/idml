<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a PointSize Attribute
 */
trait PointSizeAttribute {

    /**
     * @XmlAttribute
     * @SerializedName("PointSize")
     */
    private int $pointSize;

    /**
     * Get the value of pointSize
     */
    public function getPointSize(): int
    {
        return $this->pointSize;
    }

    /**
     * Set the value of pointSize
     */
    public function setPointSize(int $pointSize): self
    {
        $this->pointSize = $pointSize;

        return $this;
    }
}