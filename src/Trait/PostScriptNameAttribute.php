<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a PostScriptName Attribute
 */
trait PostScriptNameAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("PostScriptName")
     */
    private string $postScriptName;


    /**
     * Get the value of postScriptName
     */
    public function getPostScriptName(): string
    {
        return $this->postScriptName;
    }

    /**
     * Set the value of postScriptName
     */
    public function setPostScriptName(string $postScriptName): self
    {
        $this->postScriptName = $postScriptName;

        return $this;
    }
}
