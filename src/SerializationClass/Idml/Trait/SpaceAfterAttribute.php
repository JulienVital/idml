<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a SpaceAfter Attribute
 */
trait SpaceAfterAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("SpaceAfter")
     */
    private string $spaceAfter;

    /**
     * Get the value of spaceAfter
     */
    public function getSpaceAfter(): string
    {
        return $this->spaceAfter;
    }

    /**
     * Set the value of spaceAfter
     */
    public function setSpaceAfter(string $spaceAfter): self
    {
        $this->spaceAfter = $spaceAfter;

        return $this;
    }
}
