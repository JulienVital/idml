<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a FlattenerOverride Attribute
 * default value is "Default"
 * TODO ENUM he transparency flattener preferences override for the spread. (<Spread> only). Can be 
 * Default, None, or Custom.
 */
trait FlattenerOverrideAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("FlattenerOverride")
     */
    private string $flattenerOverride= "Default";


    /**
     * Get the value of flattenerOverride
     */
    public function getFlattenerOverride(): string
    {
        return $this->flattenerOverride;
    }

    /**
     * Set the value of flattenerOverride
     */
    public function setFlattenerOverride(string $flattenerOverride): self
    {
        $this->flattenerOverride = $flattenerOverride;

        return $this;
    }
}
