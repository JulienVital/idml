<?php
namespace Jvital\Idml\SerializationClass\Idml\Ressources\Styles;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Trait\Properties;

/** 
 * @XmlRoot("AnchoredObjectSetting") 
 */
class AnchoredObjectSetting
{
    use Properties;

    /**
     * @XmlAttribute
     * @SerializedName("AnchoredPosition")
     */
    private string $anchoredPosition;

    
    /**
     * @XmlAttribute
     * @SerializedName("SpineRelative")
     */
    private bool $spineRelative;

    /**
     * @XmlAttribute
     * @SerializedName("LockPosition")
     */
    private bool $lockPosition;

    /**
     * @XmlAttribute
     * @SerializedName("PinPosition")
     */
    private bool $pinPosition;

    /**
     * @XmlAttribute
     * @SerializedName("AnchorPoint")
     */
    private string $anchorPoint;

    /**
     * @XmlAttribute
     * @SerializedName("HorizontalAlignment")
     */
    private string $horizontalAlignment;

    /**
     * @XmlAttribute
     * @SerializedName("HorizontalReferencePoint")
     */
    private string $horizontalReferencePoint;

    /**
     * @XmlAttribute
     * @SerializedName("VerticalAlignment")
     */
    private string $verticalAlignment;

    /**
     * @XmlAttribute
     * @SerializedName("VerticalReferencePoint")
     */
    private string $verticalReferencePoint;

    /**
     * @XmlAttribute
     * @SerializedName("AnchorXoffset")
     */
    private int $anchorXoffset;

    /**
     * @XmlAttribute
     * @SerializedName("AnchorYoffset")
     */
    private int $anchorYoffset;

    /**
     * @XmlAttribute
     * @SerializedName("AnchorSpaceAbove")
     */
    private int $anchorSpaceAbove;


    /**
     * Get the value of anchoredPosition
     */
    public function getAnchoredPosition(): string
    {
        return $this->anchoredPosition;
    }

    /**
     * Set the value of anchoredPosition
     */
    public function setAnchoredPosition(string $anchoredPosition): self
    {
        $this->anchoredPosition = $anchoredPosition;

        return $this;
    }

    /**
     * Get the value of spineRelative
     */
    public function isSpineRelative(): bool
    {
        return $this->spineRelative;
    }

    /**
     * Set the value of spineRelative
     */
    public function setSpineRelative(bool $spineRelative): self
    {
        $this->spineRelative = $spineRelative;

        return $this;
    }

    /**
     * Get the value of lockPosition
     */
    public function isLockPosition(): bool
    {
        return $this->lockPosition;
    }

    /**
     * Set the value of lockPosition
     */
    public function setLockPosition(bool $lockPosition): self
    {
        $this->lockPosition = $lockPosition;

        return $this;
    }

    /**
     * Get the value of pinPosition
     */
    public function isPinPosition(): bool
    {
        return $this->pinPosition;
    }

    /**
     * Set the value of pinPosition
     */
    public function setPinPosition(bool $pinPosition): self
    {
        $this->pinPosition = $pinPosition;

        return $this;
    }

    /**
     * Get the value of anchorPoint
     */
    public function getAnchorPoint(): string
    {
        return $this->anchorPoint;
    }

    /**
     * Set the value of anchorPoint
     */
    public function setAnchorPoint(string $anchorPoint): self
    {
        $this->anchorPoint = $anchorPoint;

        return $this;
    }

    /**
     * Get the value of horizontalAlignment
     */
    public function getHorizontalAlignment(): string
    {
        return $this->horizontalAlignment;
    }

    /**
     * Set the value of horizontalAlignment
     */
    public function setHorizontalAlignment(string $horizontalAlignment): self
    {
        $this->horizontalAlignment = $horizontalAlignment;

        return $this;
    }

    /**
     * Get the value of horizontalReferencePoint
     */
    public function getHorizontalReferencePoint(): string
    {
        return $this->horizontalReferencePoint;
    }

    /**
     * Set the value of horizontalReferencePoint
     */
    public function setHorizontalReferencePoint(string $horizontalReferencePoint): self
    {
        $this->horizontalReferencePoint = $horizontalReferencePoint;

        return $this;
    }

    /**
     * Get the value of verticalAlignment
     */
    public function getVerticalAlignment(): string
    {
        return $this->verticalAlignment;
    }

    /**
     * Set the value of verticalAlignment
     */
    public function setVerticalAlignment(string $verticalAlignment): self
    {
        $this->verticalAlignment = $verticalAlignment;

        return $this;
    }

    /**
     * Get the value of verticalReferencePoint
     */
    public function getVerticalReferencePoint(): string
    {
        return $this->verticalReferencePoint;
    }

    /**
     * Set the value of verticalReferencePoint
     */
    public function setVerticalReferencePoint(string $verticalReferencePoint): self
    {
        $this->verticalReferencePoint = $verticalReferencePoint;

        return $this;
    }

    /**
     * Get the value of anchorXoffset
     */
    public function getAnchorXoffset(): int
    {
        return $this->anchorXoffset;
    }

    /**
     * Set the value of anchorXoffset
     */
    public function setAnchorXoffset(int $anchorXoffset): self
    {
        $this->anchorXoffset = $anchorXoffset;

        return $this;
    }

    /**
     * Get the value of anchorYoffset
     */
    public function getAnchorYoffset(): int
    {
        return $this->anchorYoffset;
    }

    /**
     * Set the value of anchorYoffset
     */
    public function setAnchorYoffset(int $anchorYoffset): self
    {
        $this->anchorYoffset = $anchorYoffset;

        return $this;
    }

    /**
     * Get the value of anchorSpaceAbove
     */
    public function getAnchorSpaceAbove(): int
    {
        return $this->anchorSpaceAbove;
    }

    /**
     * Set the value of anchorSpaceAbove
     */
    public function setAnchorSpaceAbove(int $anchorSpaceAbove): self
    {
        $this->anchorSpaceAbove = $anchorSpaceAbove;

        return $this;
    }
}
