<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a StoryList Attribute
 */
trait StoryListAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("StoryList")
     */
    private string $storyList;

    /**
     * Get the value of storyList
     */
    public function getStoryList(): string
    {
        return $this->storyList;
    }

    /**
     * Set the value of storyList
     */
    public function setStoryList(string $storyList): self
    {
        $this->storyList = $storyList;

        return $this;
    }
}