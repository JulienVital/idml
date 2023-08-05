<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait ParagraphBorderBottomLineWeight
 */
trait ParagraphBorderBottomLineWeightAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("ParagraphBorderBottomLineWeight")
     */
    private int $paragraphBorderBottomLineWeight;

    /**
     * Get the value of paragraphBorderBottomLineWeight
     */
    public function getParagraphBorderBottomLineWeight(): int
    {
        return $this->paragraphBorderBottomLineWeight;
    }

    /**
     * Set the value of paragraphBorderBottomLineWeight
     */
    public function setParagraphBorderBottomLineWeight(int $paragraphBorderBottomLineWeight): self
    {
        $this->paragraphBorderBottomLineWeight = $paragraphBorderBottomLineWeight;

        return $this;
    }
}
