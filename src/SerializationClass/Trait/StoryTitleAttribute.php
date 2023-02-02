<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add a StoryTitle Attribute
 */
trait StoryTitleAttribute {
    
    /**
     * @SerializedName("StoryTitle")
     * @XmlAttribute
     */
    private string $storyTitle;

    /**
     * Get the value of storyTitle
     */
    public function getStoryTitle(): string
    {
        return $this->storyTitle;
    }

    /**
     * Set the value of storyTitle
     */
    public function setStoryTitle(string $storyTitle): self
    {
        $this->storyTitle = $storyTitle;

        return $this;
    }
}
