<?php
namespace Jvital\Idml\SerializationClass\Idml\Ressources\Styles;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/** 
 * @XmlRoot("StoryPreference") 
 */
class StoryPreference
{
    /**
     * @XmlAttribute
     * @SerializedName("OpticalMarginAlignment")
     */
    private bool $opticalMarginAlignment;

    /**
     * @XmlAttribute
     * @SerializedName("OpticalMarginSize")
     */
    private int $opticalMarginSize;
    
    /**
     * @XmlAttribute
     * @SerializedName("FrameType")
     */
    private string $frameType;
    
    /**
     * @XmlAttribute
     * @SerializedName("StoryOrientation")
     */
    private string $storyOrientation;
    
    /**
     * @XmlAttribute
     * @SerializedName("StoryDirection")
     */
    private string $storyDirection;

    /**
     * Get the value of opticalMarginAlignment
     */
    public function isOpticalMarginAlignment(): bool
    {
        return $this->opticalMarginAlignment;
    }

    /**
     * Set the value of opticalMarginAlignment
     */
    public function setOpticalMarginAlignment(bool $opticalMarginAlignment): self
    {
        $this->opticalMarginAlignment = $opticalMarginAlignment;

        return $this;
    }

    /**
     * Get the value of opticalMarginSize
     */
    public function getOpticalMarginSize(): int
    {
        return $this->opticalMarginSize;
    }

    /**
     * Set the value of opticalMarginSize
     */
    public function setOpticalMarginSize(int $opticalMarginSize): self
    {
        $this->opticalMarginSize = $opticalMarginSize;

        return $this;
    }

    /**
     * Get the value of frameType
     */
    public function getFrameType(): string
    {
        return $this->frameType;
    }

    /**
     * Set the value of frameType
     */
    public function setFrameType(string $frameType): self
    {
        $this->frameType = $frameType;

        return $this;
    }

    /**
     * Get the value of storyOrientation
     */
    public function getStoryOrientation(): string
    {
        return $this->storyOrientation;
    }

    /**
     * Set the value of storyOrientation
     */
    public function setStoryOrientation(string $storyOrientation): self
    {
        $this->storyOrientation = $storyOrientation;

        return $this;
    }

    /**
     * Get the value of storyDirection
     */
    public function getStoryDirection(): string
    {
        return $this->storyDirection;
    }

    /**
     * Set the value of storyDirection
     */
    public function setStoryDirection(string $storyDirection): self
    {
        $this->storyDirection = $storyDirection;

        return $this;
    }
}
