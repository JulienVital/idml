<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a CornerOption Attribute
 */
trait CornerOptionAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("CornerOption")
     */
    private string $cornerOption;

    /**
     * Get the value of cornerOption
     */
    public function getCornerOption(): string
    {
        return $this->cornerOption;
    }

    /**
     * Set the value of cornerOption
     */
    public function setCornerOption(string $cornerOption): self
    {
        $this->cornerOption = $cornerOption;

        return $this;
    }
}
