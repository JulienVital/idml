<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add AppliedParagraphStyle
 */
trait AppliedParagraphStyleAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("AppliedParagraphStyle")
     */
    private string $appliedParagraphStyle;

    /**
     * Get the value of appliedParagraphStyle
     */
    public function getAppliedParagraphStyle(): string
    {
        return $this->appliedParagraphStyle;
    }

    /**
     * Set the value of appliedParagraphStyle
     */
    public function setAppliedParagraphStyle(string $appliedParagraphStyle): self
    {
        $this->appliedParagraphStyle = $appliedParagraphStyle;

        return $this;
    }
}
