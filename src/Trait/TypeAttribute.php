<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a Properties child
 */
trait TypeAttribute {
    
    /**
     * @SerializedName("type")
     */
    private string $properties;

}
