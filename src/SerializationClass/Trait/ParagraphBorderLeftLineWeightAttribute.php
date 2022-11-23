<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait ParagraphBorderLeftLineWeight
 */
trait ParagraphBorderLeftLineWeightAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("ParagraphBorderLeftLineWeight")
     */
    private int $paragraphBorderLeftLineWeight;

    /**
     * Get the value of paragraphBorderLeftLineWeight
     */
    public function getParagraphBorderLeftLineWeight(): int
    {
        return $this->paragraphBorderLeftLineWeight;
    }

    /**
     * Set the value of paragraphBorderLeftLineWeight
     */
    public function setParagraphBorderLeftLineWeight(int $paragraphBorderLeftLineWeight): self
    {
        $this->paragraphBorderLeftLineWeight = $paragraphBorderLeftLineWeight;

        return $this;
    }
}
