<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a BottomRightCornerOption Attribute
 */
trait BottomRightCornerOptionAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("BottomRightCornerOption")
     */
    private string $bottomRightCornerOption;

    /**
     * Get the value of bottomRightCornerOption
     */
    public function getBottomRightCornerOption(): string
    {
        return $this->bottomRightCornerOption;
    }

    /**
     * Set the value of bottomRightCornerOption
     */
    public function setBottomRightCornerOption(string $bottomRightCornerOption): self
    {
        $this->bottomRightCornerOption = $bottomRightCornerOption;

        return $this;
    }
}
