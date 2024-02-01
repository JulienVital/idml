<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a AppliedObjectStyle Attribute
 * default value is true
 */
trait AppliedObjectStyleAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("AppliedObjectStyle")
     */
    private string $appliedObjectStyle;


    /**
     * Get the value of appliedObjectStyle
     */
    public function getAppliedObjectStyle(): string
    {
        return $this->appliedObjectStyle;
    }

    /**
     * Set the value of appliedObjectStyle
     */
    public function setAppliedObjectStyle(string $appliedObjectStyle): self
    {
        $this->appliedObjectStyle = $appliedObjectStyle;

        return $this;
    }
}
