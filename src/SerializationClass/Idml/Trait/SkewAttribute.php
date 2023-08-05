<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a Skew Attribute
 */
trait SkewAttribute {

    /**
     * @XmlAttribute
     * @SerializedName("Skew")
     */
    private int $skew;

    /**
     * Get the value of skew
     */
    public function getSkew(): int
    {
        return $this->skew;
    }

    /**
     * Set the value of skew
     */
    public function setSkew(int $skew): self
    {
        $this->skew = $skew;

        return $this;
    }
}