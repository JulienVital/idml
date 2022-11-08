<?php
namespace Jvital\Idml\Stories;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Utils\IdpkgWrapper;

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
