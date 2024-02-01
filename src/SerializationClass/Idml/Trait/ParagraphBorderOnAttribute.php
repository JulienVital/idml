<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait ParagraphBorderOn
 */
trait ParagraphBorderOnAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("ParagraphBorderOn")
     */
    private bool $paragraphBorderOn;

    /**
     * Get the value of paragraphBorderOn
     */
    public function isParagraphBorderOn(): bool
    {
        return $this->paragraphBorderOn;
    }

    /**
     * Set the value of paragraphBorderOn
     */
    public function setParagraphBorderOn(bool $paragraphBorderOn): self
    {
        $this->paragraphBorderOn = $paragraphBorderOn;

        return $this;
    }
}
