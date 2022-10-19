<?php
namespace Jvital\Idml\Stories;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\XML\BackingStory\XmlElement;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\SerializedName;

/** 
 * @XmlRoot("CharacterStyleRange") 
*/
class CharacterStyleRange
{
    /**
     * @SkipWhenEmpty
     * @var XmlElement
     * @SerializedName("XMLElement")
     */
    private XmlElement $xmlElement;


    /**
     * @SkipWhenEmpty
     * @var string
     * @SerializedName("Content")
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