<?php
namespace Jvital\Idml\SerializationClass\Idml\Designmap;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/** 
 * @XmlRoot("IdpkgTags") 
 */
class IdpkgTags
{
    
    /**
     * @SerializedName("src")
     * @XmlAttribute
     */
    private string $src='XML/Tags.xml';
}

