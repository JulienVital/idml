<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a ColumnSpanAttribute Attribute
 * 	
 * The number of columns that the object spans.
 * default value is 1
 */
trait ColumnSpanAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("ColumnSpan")
     */
    private int $columnSpan= 1;


    /**
     * Get the value of ColumnSpanAttribute
     */
    public function getColumnSpan(): int
    {
        return $this->columnSpan;
    }

    /**
     * Set the value of ColumnSpanAttribute
     */
    public function setColumnSpan(int $columnSpan): self
    {
        $this->columnSpan = $columnSpan;

        return $this;
    }
}
