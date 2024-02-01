<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add a ContentType Attribute
 */
trait ContentTypeAttribute
{
    
    /**
     * @SerializedName("ContentType")
     * @XmlAttribute
     */
    private string $contentType;


    /**
     * Get the value of contentType
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * Set the value of contentType
     */
    public function setContentType(string $contentType): self
    {
        $this->contentType = $contentType;

        return $this;
    }
}
