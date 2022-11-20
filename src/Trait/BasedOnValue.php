<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Properties\Value\BasedOn;

/**
 * This trait BasedOn
 */
trait BasedOnValue {
    
    /**
     * @SerializedName("BasedOn")
     */
    private BasedOn $basedOn;

    /**
     * Get the value of basedOn
     */
    public function getBasedOn(): BasedOn
    {
        return $this->basedOn;
    }

    /**
     * Set the value of basedOn
     */
    public function setBasedOn(BasedOn $basedOn): self
    {
        $this->basedOn = $basedOn;

        return $this;
    }
}
