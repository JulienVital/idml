<?php
namespace Jvital\Idml\SerializationClass\Idml\Designmap;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/** 
 * @XmlRoot("IdpkgStyles") 
*/
class IdpkgStyles{
    
    /**
    * @SerializedName("src")
    * @XmlAttribute
    */
    private string $src='Resources/Styles.xml';
}

