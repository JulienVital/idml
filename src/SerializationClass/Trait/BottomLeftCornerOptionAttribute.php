<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a BottomLeftCornerOption Attribute
 */
trait BottomLeftCornerOptionAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("BottomLeftCornerOption")
     */
    private string $bottomLeftCornerOption;

    /**
     * Get the value of bottomLeftCornerOption
     */
    public function getBottomLeftCornerOption(): string
    {
        return $this->bottomLeftCornerOption;
    }

    /**
     * Set the value of bottomLeftCornerOption
     */
    public function setBottomLeftCornerOption(string $bottomLeftCornerOption): self
    {
        $this->bottomLeftCornerOption = $bottomLeftCornerOption;

        return $this;
    }
}
