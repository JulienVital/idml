<?php
namespace Jvital\Idml\SerializationClass\Spread;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

/** 
 * @XmlRoot("Label") 
*/
class Label
{

    /**
     * @SerializedName("KeyValuePair")
     */
    private KeyValuePair $keyValuePair;

    /**
     * Get the value of keyValuePair
     */
    public function getKeyValuePair(): KeyValuePair
    {
        return $this->keyValuePair;
    }

    /**
     * Set the value of keyValuePair
     */
    public function setKeyValuePair(KeyValuePair $keyValuePair): self
    {
        $this->keyValuePair = $keyValuePair;

        return $this;
    }
}
