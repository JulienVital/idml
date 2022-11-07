<?php
namespace Jvital\Idml\XML\BackingStory;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
/** 
 * @XmlRoot("idPkg:BackingStory") 
 * @XmlNamespace(uri="http://ns.adobe.com/AdobeInDesign/idml/1.0/packaging", prefix="idPkg")
*/
class BackingStory {

    /**
     * @SerializedName("XmlStory")
    */
    private XmlStory $xmlStory;

    /**
     * @XmlAttribute
    * @SerializedName("DOMVersion")
    */
    private string $DOMVersion = "17.0";
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
