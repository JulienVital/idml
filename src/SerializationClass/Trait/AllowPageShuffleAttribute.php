<?php
namespace Jvital\Idml\SerializationClass\Trait;

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
    private bool $allowPageShuffle= true;


    /**
     * Get the value of allowPageShuffle
     */
    public function isAllowPageShuffle(): bool
    {
        return $this->allowPageShuffle;
    }

    /**
     * Set the value of allowPageShuffle
     */
    public function setAllowPageShuffle(bool $allowPageShuffle): self
    {
        $this->allowPageShuffle = $allowPageShuffle;

        return $this;
    }
}
