<?php
namespace Jvital\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Utils\IdpkgWrapper;

/** 
 * @XmlRoot("idPkg:Spread") 
*/
class SpreadIdpkg extends IdpkgWrapper
{

    /**
    * @SerializedName("Spread")
    */
    private Spread $spread;
}
