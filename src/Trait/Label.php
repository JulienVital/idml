<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Spread\Label as SpreadLabel;

/**
 * This trait add a Label 
 */
trait Label {
    
    /**
     * @SerializedName("Label")
     */
    private SpreadLabel $Label;


    /**
     * Get the value of Label
     */
    public function getLabel(): SpreadLabel
    {
        return $this->Label;
    }

    /**
     * Set the value of Label
     */
    public function setLabel(SpreadLabel $Label): self
    {
        $this->Label = $Label;

        return $this;
    }
}
