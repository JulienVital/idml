<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a FontStyle Attribute
 */
trait FontStyleAttribute {

    /**
     * @XmlAttribute
     * @SerializedName("FontStyle")
     */
    private string $fontStyle;

    /**
     * Get the value of fontStyle
     */
    public function getFontStyle(): string
    {
        return $this->fontStyle;
    }

    /**
     * Set the value of fontStyle
     */
    public function setFontStyle(string $fontStyle): self
    {
        $this->fontStyle = $fontStyle;

        return $this;
    }
}