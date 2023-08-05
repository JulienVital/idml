<?php
namespace Jvital\Idml\SerializationClass\Idml\Stories;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Utils\IdpkgWrapper;

/** 
 * @XmlRoot("idPkg:Story") 
*/
class StoryIdpkg extends IdpkgWrapper
{
    /**
     * @SerializedName("Story")
    */
    private Story $story;

    /**
     * Get the value of spread
     */
    public function getName()
    {
        return $this->story->getId();
    }
}
