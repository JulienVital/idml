<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Properties\Value\Leading;

/**
 * This trait Leading
 */
trait LeadingValue {
    
    /**
     * @SerializedName("Leading")
     */
    private Leading $leading;

    /**
     * Get the value of leading
     */
    public function getLeading(): Leading
    {
        return $this->leading;
    }

    /**
     * Set the value of leading
     */
    public function setLeading(Leading $leading): self
    {
        $this->leading = $leading;

        return $this;
    }
}
