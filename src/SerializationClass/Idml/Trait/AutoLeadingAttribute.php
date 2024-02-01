<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add AutoLeading value 
 */
trait AutoLeadingAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("AutoLeading")
     */
    private ?int $autoLeading = null;

    /**
     * Get the value of autoLeading
     */
    public function getAutoLeading(): ?int
    {
        return $this->autoLeading;
    }

    /**
     * Set the value of autoLeading
     */
    public function setAutoLeading(int $autoLeading): self
    {
        $this->autoLeading = $autoLeading;

        return $this;
    }
}
