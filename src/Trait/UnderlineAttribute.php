<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a Underline Attribute
 */
trait UnderlineAttribute {

    /**
     * @XmlAttribute
     * @SerializedName("Underline")
     */
    private bool $underline;

    /**
     * Get the value of underline
     */
    public function isUnderline(): bool
    {
        return $this->underline;
    }

    /**
     * Set the value of underline
     */
    public function setUnderline(bool $underline): self
    {
        $this->underline = $underline;

        return $this;
    }
}