<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a self attribute
 * Use string from __construct() method
 */
trait SelfAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("Self")
     */
    private string $self;

    function getSelf(){
        return $this->self;
    }
}
