<?php
namespace Jvital\Idml\SerializationClass\Idml\XML\BackingStory;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Utils\IdpkgWrapper;

/** 
 * @XmlRoot("idPkg:BackingStory") 
*/
class BackingStory extends IdpkgWrapper{

    /**
     * @SerializedName("XmlStory")
    */
    private XmlStory $xmlStory;

    /**
     * Get the value of xmlStory
     */
    public function getXmlStory(): XmlStory
    {
        return $this->xmlStory;
    }

    /**
     * Set the value of xmlStory
     */
    public function setXmlStory(XmlStory $xmlStory): self
    {
        $this->xmlStory = $xmlStory;

        return $this;
    }
}
