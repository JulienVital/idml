<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a ZeroPoint Attribute
 */
trait ZeroPointAttribute
{
    
    /**
     * @XmlAttribute
     * @SerializedName("ZeroPoint")
     */
    private string $zeroPoint;
}