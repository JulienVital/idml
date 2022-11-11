<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a Properties child
 */
trait Properties {
    
    /**
     * @SerializedName("Properties")
     */
    private array $properties;

    /**
     * Get the value of properties
     */
    public function getProperties(): array
    {
        return $this->properties;
    }

    /**
     * Set the value of properties
     */
    public function setProperties(array $properties): self
    {
        $this->properties = $properties;

        return $this;
    }
}
