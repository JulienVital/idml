<?php
namespace Jvital\Idml\SerializationClass\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Utils\IdpkgWrapper;

/** 
 * @XmlRoot("idPkg:Spread") 
 */
class SpreadIdpkg extends IdpkgWrapper
{

    public function __construct(Spread $spread)
    {
        $this->spread = $spread;
    }

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

    /**
     * Get the value of spread
     */
    public function getSpread(): Spread
    {
        return $this->spread;
    }
}
