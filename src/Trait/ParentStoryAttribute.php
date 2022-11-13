<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add a ParentStory Attribute
 */
trait ParentStoryAttribute {
    
    /**
     * @SerializedName("ParentStory")
     * @XmlAttribute
     */
    private string $parentStory;


    /**
     * Get the value of parentStory
     */
    public function getParentStory(): string
    {
        return $this->parentStory;
    }

    /**
     * Set the value of parentStory
     */
    public function setParentStory(string $parentStory): self
    {
        $this->parentStory = $parentStory;

        return $this;
    }
}
