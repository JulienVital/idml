<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a AllowPageShuffle Attribute
 * default value is true
 */
trait AllowPageShuffleAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("AllowPageShuffle")
     */
    private bool $AllowPageShuffle= true;


    /**
     * Get the value of allowPageShuffle
     */
    public function isAllowPageShuffle(): bool
    {
        return $this->AllowPageShuffle;
    }

    /**
     * Set the value of allowPageShuffle
     */
    public function setAllowPageShuffle(bool $AllowPageShuffle): self
    {
        $this->AllowPageShuffle = $AllowPageShuffle;

        return $this;
    }
}
