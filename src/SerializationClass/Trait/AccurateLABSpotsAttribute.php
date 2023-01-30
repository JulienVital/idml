<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a AccurateLABSpots Attribute
 * default value is true
 */
trait AccurateLABSpotsAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("AccurateLABSpots")
     */
    private bool $accurateLABSpots;


    /**
     * Get the value of accurateLABSpots
     */
    public function isAccurateLABSpots(): bool
    {
        return $this->accurateLABSpots;
    }

    /**
     * Set the value of accurateLABSpots
     */
    public function setAccurateLABSpots(bool $accurateLABSpots): self
    {
        $this->accurateLABSpots = $accurateLABSpots;

        return $this;
    }
}
