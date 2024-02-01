<?php
namespace Jvital\Idml\SerializationClass\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/** 
 * @XmlRoot("KeyValuePair") 
 */
class KeyValuePair
{

    /**
     * @XmlAttribute
     * @SerializedName("Key")
     */
    private string $key;

    /**
     * @XmlAttribute
     * @SerializedName("Value")
     */
    private string $value;

    /**
     * Get the value of Key
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Set the value of Key
     */
    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get the value of value
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Set the value of value
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
