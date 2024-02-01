<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a Capitalization Attribute
 */
trait CapitalizationAttribute
{

    /**
     * @XmlAttribute
     * @SerializedName("Capitalization")
     */
    private string $capitalization;

    /**
     * Get the value of capitalization
     */
    public function getCapitalization(): string
    {
        return $this->capitalization;
    }

    /**
     * Set the value of capitalization
     */
    public function setCapitalization(string $capitalization): self
    {
        $this->capitalization = $capitalization;

        return $this;
    }
}