<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Properties\Value\ParagraphBorderType;

/**
 * This trait ParagraphBorderType
 */
trait ParagraphBorderTypeValue {
    
    /**
     * @SerializedName("ParagraphBorderType")
     */
    private ParagraphBorderType $paragraphBorderType;


    /**
     * Get the value of paragraphBorderType
     */
    public function getParagraphBorderType(): ParagraphBorderType
    {
        return $this->paragraphBorderType;
    }

    /**
     * Set the value of paragraphBorderType
     */
    public function setParagraphBorderType(ParagraphBorderType $paragraphBorderType): self
    {
        $this->paragraphBorderType = $paragraphBorderType;

        return $this;
    }
}
