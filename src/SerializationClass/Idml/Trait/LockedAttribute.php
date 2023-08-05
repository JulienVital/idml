<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a Locked Attribute
 * default value is false
 */
trait LockedAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("Locked")
     */
    private bool $locked= false;


    /**
     * Get the value of locked
     */
    public function isLocked(): bool
    {
        return $this->locked;
    }

    /**
     * Set the value of locked
     */
    public function setLocked(bool $locked): self
    {
        $this->locked = $locked;

        return $this;
    }
}
