<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Properties\Value\ParagraphBorderColor;

/**
 * This trait ParagraphBorderColor
 */
trait ParagraphBorderColorValue {
    
    /**
     * @SerializedName("ParagraphBorderColor")
     */
    private ParagraphBorderColor $paragraphBorderColor;


    /**
     * Get the value of paragraphBorderColor
     */
    public function getParagraphBorderColor(): ParagraphBorderColor
    {
        return $this->paragraphBorderColor;
    }

    /**
     * Set the value of paragraphBorderColor
     */
    public function setParagraphBorderColor(ParagraphBorderColor $paragraphBorderColor): self
    {
        $this->paragraphBorderColor = $paragraphBorderColor;

        return $this;
    }
}
