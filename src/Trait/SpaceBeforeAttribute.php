<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a SpaceBefore Attribute
 */
trait SpaceBeforeAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("SpaceBefore")
     */
    private string $spaceBefore;

    /**
     * Get the value of spaceBefore
     */
    public function getSpaceBefore(): string
    {
        return $this->spaceBefore;
    }

    /**
     * Set the value of spaceBefore
     */
    public function setSpaceBefore(string $spaceBefore): self
    {
        $this->spaceBefore = $spaceBefore;

        return $this;
    }
}
