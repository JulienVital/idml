<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add a ColumnCount Attribute
 * range 0-25
 */
trait ColumnCountAttribute {
    
    /**
     * @SerializedName("ColumnCount")
     * @XmlAttribute
     */
    private int $columnCount;


    /**
     * Get the value of columnCount
     */
    public function getColumnCount(): int
    {
        return $this->columnCount;
    }

    /**
     * Set the value of columnCount
     */
    public function setColumnCount(int $columnCount): self
    {
        $this->columnCount = $columnCount;

        return $this;
    }
}
