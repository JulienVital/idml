<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a BaselineShift Attribute
 */
trait BaselineShiftAttribute {

    /**
     * @XmlAttribute
     * @SerializedName("BaselineShift")
     */
    private int $baselineShift;

    /**
     * Get the value of baselineShift
     */
    public function getBaselineShift(): int
    {
        return $this->baselineShift;
    }

    /**
     * Set the value of baselineShift
     */
    public function setBaselineShift(int $baselineShift): self
    {
        $this->baselineShift = $baselineShift;

        return $this;
    }
}