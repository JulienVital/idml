<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add a ItemLayer Attribute
 */
trait ItemLayerAttribute {
    
    /**
     * @SerializedName("ItemLayer")
     * @XmlAttribute
     */
    private string $itemLayer;

    /**
     * Get the value of itemLayer
     */
    public function getItemLayer(): string
    {
        return $this->itemLayer;
    }

    /**
     * Set the value of itemLayer
     */
    public function setItemLayer(string $itemLayer): self
    {
        $this->itemLayer = $itemLayer;

        return $this;
    }
}
