<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a FontFamily Attribute
 */
trait FontFamilyAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("FontFamily")
     */
    private string $fontFamily;

    /**
     * Get the value of fontFamily
     */
    public function getFontFamily(): string
    {
        return $this->fontFamily;
    }

    /**
     * Set the value of fontFamily
     */
    public function setFontFamily(string $fontFamily): self
    {
        $this->fontFamily = $fontFamily;

        return $this;
    }
}
