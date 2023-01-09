<?php
namespace Jvital\Idml\SerializationClass\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Utils\IdpkgWrapper;

/** 
 * @XmlRoot("idPkg:Spread") 
*/
class SpreadIdpkg extends IdpkgWrapper
{

    /**
    * @SerializedName("Spread")
    */
    private Spread $spread;

    /**
     * Get the value of spread
     */
    public function getName()
    {
        return $this->spread->getSelf();
    }
}
