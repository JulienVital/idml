<?php
namespace Jvital\Idml\SerializationClass\Idml\Designmap;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/** 
 * @XmlRoot("idPkg:Fonts") 
*/
class IdpkgFonts
{

    /**
    * @SerializedName("src")
    * @XmlAttribute
    */
    private string $src='Resources/Fonts.xml';
}
