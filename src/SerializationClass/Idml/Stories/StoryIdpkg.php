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

    public function __construct($story)
    {
        $this->story = $story;
    }

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

    /**
     * Get the value of story
     */
    public function getStory(): Story
    {
        return $this->story;
    }
}
