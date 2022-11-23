<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a RowSpan Attribute
 * 	
 * The number of rows that the object spans.
 * default value is 1
 */
trait RowSpanAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("RowSpan")
     */
    private int $rowSpan= 1;


    /**
     * Get the value of rowSpan
     */
    public function getRowSpan(): int
    {
        return $this->rowSpan;
    }

    /**
     * Set the value of rowSpan
     */
    public function setRowSpan(int $rowSpan): self
    {
        $this->rowSpan = $rowSpan;

        return $this;
    }
}
