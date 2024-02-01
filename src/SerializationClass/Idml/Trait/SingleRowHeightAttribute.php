<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a SingleRowHeight Attribute
 */
trait SingleRowHeightAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("SingleRowHeight")
     */
    private string $singleRowHeight;


    /**
     * Get the value of singleRowHeight
     */
    public function getSingleRowHeight(): string
    {
        return $this->singleRowHeight;
    }

    /**
     * Set the value of singleRowHeight
     */
    public function setSingleRowHeight(string $singleRowHeight): self
    {
        $this->singleRowHeight = $singleRowHeight;

        return $this;
    }
}
