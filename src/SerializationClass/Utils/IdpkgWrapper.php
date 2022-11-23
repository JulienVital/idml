<?php
namespace Jvital\Idml\SerializationClass\Utils;

use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/** 
 * @XmlNamespace(uri="http://ns.adobe.com/AdobeInDesign/idml/1.0/packaging", prefix="idPkg")
 * 
*/
abstract class IdpkgWrapper 
{
    /**
    * @XmlAttribute
    * @SerializedName("DOMVersion")
    */
    private string $DOMVersion = "17.0";
}
