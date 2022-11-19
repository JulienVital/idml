<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a SingleColumnWidth Attribute
 */
trait SingleColumnWidthAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("SingleColumnWidth")
     */
    private string $singleColumnWidth;

    /**
     * Get the value of singleColumnWidth
     */
    public function getSingleColumnWidth(): string
    {
        return $this->singleColumnWidth;
    }

    /**
     * Set the value of singleColumnWidth
     */
    public function setSingleColumnWidth(string $singleColumnWidth): self
    {
        $this->singleColumnWidth = $singleColumnWidth;

        return $this;
    }
}
