<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a TableDirection Attribute
 */
trait TableDirectionAttribute {

    /**
     * @XmlAttribute
     * @SerializedName("TableDirection")
     */
    private string $tableDirection;

    /**
     * Get the value of tableDirection
     */
    public function getTableDirection(): string
    {
        return $this->tableDirection;
    }

    /**
     * Set the value of tableDirection
     */
    public function setTableDirection(string $tableDirection): self
    {
        $this->tableDirection = $tableDirection;

        return $this;
    }
}
