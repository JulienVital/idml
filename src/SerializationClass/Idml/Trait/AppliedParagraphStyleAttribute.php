<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add AppliedParagraphStyle
 */
trait AppliedParagraphStyleAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("AppliedParagraphStyle")
     */
    private string $appliedParagraphStyle = 'ParagraphStyle/$ID/NormalParagraphStyle';

    /**
     * Get the value of appliedParagraphStyle
     */
    public function getAppliedParagraphStyle(): string
    {
        return substr($this->appliedParagraphStyle, 15);
    }

    
    /**
     * Set the value of appliedParagraphStyle
     */
    public function setAppliedParagraphStyle(string $appliedParagraphStyle): self
    {
        $this->appliedParagraphStyle = "ParagraphStyle/$appliedParagraphStyle";

        return $this;
    }
}
