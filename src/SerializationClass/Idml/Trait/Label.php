<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Spread\Label as SpreadLabel;

/**
 * This trait add a Label 
 */
trait Label
{
    
    /**
     * @SerializedName("Label")
     */
    private SpreadLabel $label;


    /**
     * Get the value of Label
     */
    public function getLabel(): SpreadLabel
    {
        return $this->label;
    }

    /**
     * Set the value of Label
     */
    public function setLabel(SpreadLabel $label): self
    {
        $this->label = $label;

        return $this;
    }
}
