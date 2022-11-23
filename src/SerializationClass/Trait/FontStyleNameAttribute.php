<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a FontStyleName Attribute
 */
trait FontStyleNameAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("FontStyleName")
     */
    private string $fontStyleName;

}
