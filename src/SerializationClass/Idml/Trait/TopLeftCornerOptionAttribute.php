<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a TopLeftCornerOption Attribute
 */
trait TopLeftCornerOptionAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("TopLeftCornerOption")
     */
    private string $topLeftCornerOption;

    /**
     * Get the value of topLeftCornerOption
     */
    public function getTopLeftCornerOption(): string
    {
        return $this->topLeftCornerOption;
    }

    /**
     * Set the value of topLeftCornerOption
     */
    public function setTopLeftCornerOption(string $topLeftCornerOption): self
    {
        $this->topLeftCornerOption = $topLeftCornerOption;

        return $this;
    }
}
