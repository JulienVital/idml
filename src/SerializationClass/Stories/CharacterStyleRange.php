<?php
namespace Jvital\Idml\SerializationClass\Stories;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\XML\BackingStory\XmlElement;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlElement as XmlElementJMS;
use Jvital\Idml\SerializationClass\Trait\AppliedCharacterStyle;

/** 
 * @XmlRoot("CharacterStyleRange") 
*/
class CharacterStyleRange
{
    use AppliedCharacterStyle;
    /**
     * @var XmlElement
     * @SerializedName("XMLElement")
     */
    private XmlElement $xmlElement;


    /**
     * @var string
     * @SerializedName("Content")
     * @XmlElementJMS(cdata=false)
     */
    private string $content;
    /**
     * Get the value of xmlElement
     */
    public function getXmlElement(): XmlElement
    {
        return $this->xmlElement;
    }

    /**
     * Set the value of xmlElement
     */
    public function setXmlElement(XmlElement $xmlElement): self
    {
        $this->xmlElement = $xmlElement;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}