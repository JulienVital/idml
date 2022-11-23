<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a BindingLocation Attribute
 */
trait BindingLocationAttribute {

    /**
     * @XmlAttribute
     * @SerializedName("BindingLocation")
     */
    private int $bindingLocation = 1;


    /**
     * Get the value of bindingLocation
     */
    public function getBindingLocation(): int
    {
        return $this->bindingLocation;
    }

    /**
     * Set the value of bindingLocation
     */
    public function setBindingLocation(int $bindingLocation): self
    {
        $this->bindingLocation = $bindingLocation;

        return $this;
    }
}