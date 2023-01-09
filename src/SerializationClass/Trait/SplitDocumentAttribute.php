<?php
namespace Jvital\Idml\SerializationClass\Trait;

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
     * Set the value of splitDocument
     */
    public function setSplitDocument(bool $splitDocument): self
    {
        $this->splitDocument = $splitDocument;

        return $this;
    }
}
