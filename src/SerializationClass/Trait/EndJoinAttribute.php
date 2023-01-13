<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a EndJoin Attribute
 */
trait EndJoinAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("EndJoin")
     */
    private string $endJoin;

    /**
     * Get the value of endJoin
     */
    public function getEndJoin(): string
    {
        return $this->endJoin;
    }

    /**
     * Set the value of endJoin
     */
    public function setEndJoin(string $endJoin): self
    {
        $this->endJoin = $endJoin;

        return $this;
    }
}
