<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a ColumnSpanAttribute Attribute
 * 	
 * The number of columns that the object spans.
 * default value is 1
 */
trait TextCellInsetAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("TextTopInset")
     */
    private string $textTopInset;

    /**
     * @XmlAttribute
     * @SerializedName("TextLeftInset")
     */
    private string $textLeftInset;

    /**
     * @XmlAttribute
     * @SerializedName("TextBottomInset")
     */
    private string $textBottomInset;

    /**
     * @XmlAttribute
     * @SerializedName("TextRightInset")
     */
    private string $textRightInset;

    /**
     * Get the value of textTopInset
     */
    public function getTextTopInset(): string
    {
        return $this->textTopInset;
    }

    /**
     * Set the value of textTopInset
     */
    public function setTextTopInset(string $textTopInset): self
    {
        $this->textTopInset = $textTopInset;

        return $this;
    }

    /**
     * Get the value of textLeftInset
     */
    public function getTextLeftInset(): string
    {
        return $this->textLeftInset;
    }

    /**
     * Set the value of textLeftInset
     */
    public function setTextLeftInset(string $textLeftInset): self
    {
        $this->textLeftInset = $textLeftInset;

        return $this;
    }

    /**
     * Get the value of textBottomInset
     */
    public function getTextBottomInset(): string
    {
        return $this->textBottomInset;
    }

    /**
     * Set the value of textBottomInset
     */
    public function setTextBottomInset(string $textBottomInset): self
    {
        $this->textBottomInset = $textBottomInset;

        return $this;
    }

    /**
     * Get the value of textRightInset
     */
    public function getTextRightInset(): string
    {
        return $this->textRightInset;
    }

    /**
     * Set the value of textRightInset
     */
    public function setTextRightInset(string $textRightInset): self
    {
        $this->textRightInset = $textRightInset;

        return $this;
    }
}
