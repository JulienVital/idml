<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a Locked Attribute
 * default value is false
 */
trait SplitDocumentAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("SplitDocument")
     */
    private bool $splitDocument;


    /**
     * Get the value of splitDocument
     */
    public function isSplitDocument(): bool
    {
        return $this->splitDocument;
    }

    /**
     * 
     * @param bool $splitDocument 
     * @return SplitDocumentAttribute 
     */
    public function setSplitDocument(bool $splitDocument): self
    {
        $this->splitDocument = $splitDocument;

        return $this;
    }
}
