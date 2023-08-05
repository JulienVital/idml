<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Properties\Value\BaselineFrameGridColor;

/**
 * This trait BaselineFrameGridColor
 */
trait BaselineFrameGridColorValue {
    
    /**
     * @SerializedName("BaselineFrameGridColor")
     */
    private BaselineFrameGridColor $baselineFrameGridColor;


    /**
     * Get the value of baselineFrameGridColor
     */
    public function getBaselineFrameGridColor(): BaselineFrameGridColor
    {
        return $this->baselineFrameGridColor;
    }

    /**
     * Set the value of baselineFrameGridColor
     */
    public function setBaselineFrameGridColor(BaselineFrameGridColor $baselineFrameGridColor): self
    {
        $this->baselineFrameGridColor = $baselineFrameGridColor;

        return $this;
    }
}
