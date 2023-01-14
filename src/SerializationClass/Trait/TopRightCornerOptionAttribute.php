<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a TopRightCornerOption Attribute
 */
trait TopRightCornerOptionAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("TopRightCornerOption")
     */
    private string $topRightCornerOption;

    /**
     * Get the value of topRightCornerOption
     */
    public function getTopRightCornerOption(): string
    {
        return $this->topRightCornerOption;
    }

    /**
     * Set the value of topRightCornerOption
     */
    public function setTopRightCornerOption(string $topRightCornerOption): self
    {
        $this->topRightCornerOption = $topRightCornerOption;

        return $this;
    }
}
