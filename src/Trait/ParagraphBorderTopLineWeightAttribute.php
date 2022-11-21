<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait ParagraphBorderTopLineWeight
 */
trait ParagraphBorderTopLineWeightAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("ParagraphBorderTopLineWeight")
     */
    private int $paragraphBorderTopLineWeight;

    /**
     * Get the value of paragraphBorderTopLineWeight
     */
    public function getParagraphBorderTopLineWeight(): int
    {
        return $this->paragraphBorderTopLineWeight;
    }

    /**
     * Set the value of paragraphBorderTopLineWeight
     */
    public function setParagraphBorderTopLineWeight(int $paragraphBorderTopLineWeight): self
    {
        $this->paragraphBorderTopLineWeight = $paragraphBorderTopLineWeight;

        return $this;
    }
}
