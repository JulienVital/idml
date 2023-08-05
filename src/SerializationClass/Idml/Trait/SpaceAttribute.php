<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a Space Attribute
 */
trait SpaceAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("Space")
     */
    private string $space;

}
