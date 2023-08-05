<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a Tracking Attribute
 */
trait TrackingAttribute {

    /**
     * @XmlAttribute
     * @SerializedName("Tracking")
     */
    private int $tracking;

    /**
     * Get the value of tracking
     */
    public function getTracking(): int
    {
        return $this->tracking;
    }

    /**
     * Set the value of tracking
     */
    public function setTracking(int $tracking): self
    {
        $this->tracking = $tracking;

        return $this;
    }
}