<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Properties\Value\AppliedFont;

/**
 * This trait Leading
 */
trait AppliedFontValue {
    
    /**
     * @SerializedName("AppliedFont")
     */
    private AppliedFont $appliedFont;


    /**
     * Get the value of appliedFont
     */
    public function getAppliedFont(): AppliedFont
    {
        return $this->appliedFont;
    }

    /**
     * Set the value of appliedFont
     */
    public function setAppliedFont(AppliedFont $appliedFont): self
    {
        $this->appliedFont = $appliedFont;

        return $this;
    }
}