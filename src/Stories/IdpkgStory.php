<?php
namespace Jvital\Idml\Stories;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlNamespace;

/** 
 * @XmlRoot("idPkg:Story") 
 * @XmlNamespace(uri="http://ns.adobe.com/AdobeInDesign/idml/1.0/packaging", prefix="idPkg")
 * 
*/
class IdpkgStory
{

    /**
    * @XmlAttribute
    * @SerializedName("DOMVersion")
    */
    private string $DOMVersion = "17.0";

    /**
     * @SerializedName("Story")
    */
    private Story $story;
}
