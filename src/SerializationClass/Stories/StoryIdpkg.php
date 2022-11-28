<?php
namespace Jvital\Idml\SerializationClass\Stories;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Utils\IdpkgWrapper;

/** 
 * @XmlRoot("idPkg:Story") 
*/
class StoryIdpkg extends IdpkgWrapper
{
    /**
     * @SerializedName("Story")
    */
    private Story $story;
}