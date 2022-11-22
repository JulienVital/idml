<?php
namespace Jvital\Idml\Designmap;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/** 
 * @XmlRoot("idPkgGraphic") 
*/
class idPkgGraphic {
    /**
    * @SerializedName("src")
    * @XmlAttribute
    */
    private string $src='Resources/Fonts.xml';
}
