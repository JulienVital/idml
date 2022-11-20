<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a StrikeThru Attribute
 */
trait StrikeThruAttribute {

    /**
     * @XmlAttribute
     * @SerializedName("StrikeThru")
     */
    private bool $strikeThru;

    /**
     * Get the value of strikeThru
     */
    public function isStrikeThru(): bool
    {
        return $this->strikeThru;
    }

    /**
     * Set the value of strikeThru
     */
    public function setStrikeThru(bool $strikeThru): self
    {
        $this->strikeThru = $strikeThru;

        return $this;
    }
}