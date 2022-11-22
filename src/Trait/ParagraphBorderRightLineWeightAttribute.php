<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait ParagraphBorderRightLineWeight
 */
trait ParagraphBorderRightLineWeightAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("ParagraphBorderRightLineWeight")
     */
    private int $paragraphBorderRightLineWeight;

    /**
     * Get the value of paragraphBorderRightLineWeight
     */
    public function getParagraphBorderRightLineWeight(): int
    {
        return $this->paragraphBorderRightLineWeight;
    }

    /**
     * Set the value of paragraphBorderRightLineWeight
     */
    public function setParagraphBorderRightLineWeight(int $paragraphBorderRightLineWeight): self
    {
        $this->paragraphBorderRightLineWeight = $paragraphBorderRightLineWeight;

        return $this;
    }
}
