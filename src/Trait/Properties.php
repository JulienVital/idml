<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Properties\Properties as UtilsProperties;

/**
 * This trait add a Properties child
 */
trait Properties {
    
    /**
     * @SerializedName("Properties")
     */
    private UtilsProperties $properties;


    /**
     * Get the value of properties
     */
    public function getProperties(): UtilsProperties
    {
        return $this->properties;
    }

    /**
     * Set the value of properties
     */
    public function setProperties(UtilsProperties $properties): self
    {
        $this->properties = $properties;

        return $this;
    }
}

