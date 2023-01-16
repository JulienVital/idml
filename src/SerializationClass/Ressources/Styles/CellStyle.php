<?php
namespace Jvital\Idml\SerializationClass\Ressources\Styles;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Trait\Properties;

/** 
 * @XmlRoot("CellStyle") 
*/
class CellStyle
{
    use Properties;
    /**
     * @XmlAttribute
     * @SerializedName("Self")
     */
    private string $self;

    /**
     * @XmlAttribute
     * @SerializedName("ExtendedKeyboardShortcut")
     */
    private string $extendedKeyboardShortcut;

    /**
     * @XmlAttribute
     * @SerializedName("TextTopInset")
     */
    private int $textTopInset;

    /**
     * @XmlAttribute
     * @SerializedName("TextLeftInset")
     */
    private int $textLeftInset;

    /**
     * @XmlAttribute
     * @SerializedName("TextBottomInset")
     */
    private int $textBottomInset;
    
    /**
     * @XmlAttribute
     * @SerializedName("TextRightInset")
     */
    private int $textRightInset;

    /**
     * @XmlAttribute
     * @SerializedName("AppliedParagraphStyle")
     */
    private string $appliedParagraphStyle;

    /**
     * @XmlAttribute
     * @SerializedName("TopInset")
     */
    private int $topInset;

    /**
     * @XmlAttribute
     * @SerializedName("LeftInset")
     */
    private int $leftInset;

    /**
     * @XmlAttribute
     * @SerializedName("BottomInset")
     */
    private int $bottomInset;

    /**
     * @XmlAttribute
     * @SerializedName("RightInset")
     */
    private int $rightInset;

    /**
     * @XmlAttribute
     * @SerializedName("KeyboardShortcut")
     */
    private string $keyboardShortcut;

    /**
     * @XmlAttribute
     * @SerializedName("Name")
     */
    private string $name;

    /**
     * Get the value of self
     */
    public function getSelf(): string
    {
        return $this->self;
    }

    /**
     * Set the value of self
     */
    public function setSelf(string $self): self
    {
        $this->self = $self;

        return $this;
    }

    /**
     * Get the value of extendedKeyboardShortcut
     */
    public function getExtendedKeyboardShortcut(): string
    {
        return $this->extendedKeyboardShortcut;
    }

    /**
     * Set the value of extendedKeyboardShortcut
     */
    public function setExtendedKeyboardShortcut(string $extendedKeyboardShortcut): self
    {
        $this->extendedKeyboardShortcut = $extendedKeyboardShortcut;

        return $this;
    }

    /**
     * Get the value of textTopInset
     */
    public function getTextTopInset(): int
    {
        return $this->textTopInset;
    }

    /**
     * Set the value of textTopInset
     */
    public function setTextTopInset(int $textTopInset): self
    {
        $this->textTopInset = $textTopInset;

        return $this;
    }

    /**
     * Get the value of textLeftInset
     */
    public function getTextLeftInset(): int
    {
        return $this->textLeftInset;
    }

    /**
     * Set the value of textLeftInset
     */
    public function setTextLeftInset(int $textLeftInset): self
    {
        $this->textLeftInset = $textLeftInset;

        return $this;
    }

    /**
     * Get the value of textBottomInset
     */
    public function getTextBottomInset(): int
    {
        return $this->textBottomInset;
    }

    /**
     * Set the value of textBottomInset
     */
    public function setTextBottomInset(int $textBottomInset): self
    {
        $this->textBottomInset = $textBottomInset;

        return $this;
    }

    /**
     * Get the value of textRightInset
     */
    public function getTextRightInset(): int
    {
        return $this->textRightInset;
    }

    /**
     * Set the value of textRightInset
     */
    public function setTextRightInset(int $textRightInset): self
    {
        $this->textRightInset = $textRightInset;

        return $this;
    }

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

    /**
     * Get the value of topInset
     */
    public function getTopInset(): int
    {
        return $this->topInset;
    }

    /**
     * Set the value of topInset
     */
    public function setTopInset(int $topInset): self
    {
        $this->topInset = $topInset;

        return $this;
    }

    /**
     * Get the value of leftInset
     */
    public function getLeftInset(): int
    {
        return $this->leftInset;
    }

    /**
     * Set the value of leftInset
     */
    public function setLeftInset(int $leftInset): self
    {
        $this->leftInset = $leftInset;

        return $this;
    }

    /**
     * Get the value of bottomInset
     */
    public function getBottomInset(): int
    {
        return $this->bottomInset;
    }

    /**
     * Set the value of bottomInset
     */
    public function setBottomInset(int $bottomInset): self
    {
        $this->bottomInset = $bottomInset;

        return $this;
    }

    /**
     * Get the value of rightInset
     */
    public function getRightInset(): int
    {
        return $this->rightInset;
    }

    /**
     * Set the value of rightInset
     */
    public function setRightInset(int $rightInset): self
    {
        $this->rightInset = $rightInset;

        return $this;
    }

    /**
     * Get the value of keyboardShortcut
     */
    public function getKeyboardShortcut(): string
    {
        return $this->keyboardShortcut;
    }

    /**
     * Set the value of keyboardShortcut
     */
    public function setKeyboardShortcut(string $keyboardShortcut): self
    {
        $this->keyboardShortcut = $keyboardShortcut;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
