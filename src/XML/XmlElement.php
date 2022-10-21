<?php
namespace Jvital\Idml\XML;

use Jvital\Idml\XML\XmlTag;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\XmlAttribute as JMSXmlAttribute;;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\Stories\ParagraphStyleRange;
use Jvital\Idml\XML\XmlAttribute;

/** 
 * @XmlRoot("XMLElement") 
*/
class XmlElement
{
    /**
     * @JMSXmlAttribute
     * @SerializedName("Self")
     */
    private string $id;
    /**
     * @JMSXmlAttribute
     * @SerializedName("MarkupTag")
     */
    private string $markupTag;

    
    /**
     * @JMSXmlAttribute
     * @SerializedName("XMLContent")
     */
    private string $xmlContent;

    /**
    * @var XmlElement[]
    *
    * @Type("array<Jvital\Idml\XML\XmlElement>")
    * @XmlList(inline = true, entry = "XMLElement")
    */
    private array $children;

    /**
    * @var XmlAttribute[]
    *
    * @Type("array<Jvital\Idml\XML\XmlAttribute>")
    * @XmlList(inline = true, entry = "XMLAttribute")
    */
    private $xmlAttribute = [];

    public function getMarkupTag(): string
    {
        return $this->markupTag;
    }

    public function setMarkupTag(XmlTag $xmlTag): self
    {
        $this->markupTag = $xmlTag->getId();
        return $this;
    }

    public function getXmlContent(): string
    {
        return $this->xmlContent;
    }

    public function setXmlContent(string $xmlContent): self
    {
        $this->xmlContent = $xmlContent;

        return $this;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function setChildren(array $children): self
    {
        $this->children = $children;

        return $this;
    }

    public function addChild(XmlElement $children): self
    {
        $this->children[] = $children;

        return $this;
    }

    


    public function getXmlAttribute(): array
    {
        return $this->xmlAttribute;
    }

    public function setXmlAttribute(array $xmlAttribute): self
    {
        $this->xmlAttribute = $xmlAttribute;

        return $this;
    }

    public function addXmlAttribute(XmlAttribute $xmlAttribute): self
    {
        $this->xmlAttribute[] = $xmlAttribute;

        return $this;
    }
}