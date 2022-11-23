<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a ZeroPoint Attribute
 */
trait ZeroPointAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("ZeroPoint")
     */
    private string $zeroPoint;
}