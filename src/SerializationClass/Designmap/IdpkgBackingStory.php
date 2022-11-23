<?php
namespace Jvital\Idml\SerializationClass\Designmap;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/** 
 * @XmlRoot("IdpkgIdpkgBackingStory") 
*/
class IdpkgBackingStory{
    
    /**
    * @SerializedName("src")
    * @XmlAttribute
    */
    private string $src="XML/BackingStory.xml";
}

