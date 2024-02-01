<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Properties\Value\AppliedFont;
use Jvital\Idml\SerializationClass\Idml\Properties\Value\InsetSpacing;

/**
 * This trait InsetSpacing
 */
trait InsetSpacingValue
{
    
    /**
     * @SerializedName("InsetSpacing")
     */
    private InsetSpacing $insetSpacing;

    /**
     * Get the value of insetSpacing
     *
     * @return InsetSpacing
     */
    public function getInsetSpacing(): InsetSpacing
    {
        return $this->insetSpacing;
    }

    /**
     * Set the value of insetSpacing
     *
     * @param InsetSpacing $insetSpacing
     *
     * @return self
     */
    public function setInsetSpacing(InsetSpacing $insetSpacing): self
    {
        $this->insetSpacing = $insetSpacing;

        return $this;
    }
}
