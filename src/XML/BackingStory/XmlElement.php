<?php
namespace Jvital\Idml\XML\BackingStory;

use Jvital\Idml\XML\Tags\XmlTag;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\Stories\ParagraphStyleRange;

/** 
 * @XmlRoot("XMLElement") 
*/
class XmlElement
{
    /**
     * @XmlAttribute
     * @SerializedName("Self")
     */
    private string $id;
    /**
     * @XmlAttribute
     * @SerializedName("MarkupTag")
     */
    private string $markupTag;

    
    /**
     * @XmlAttribute
     * @SerializedName("XMLContent")
     */
    private string $xmlContent;

    /**
    * @var XmlElement[]
    *
    * @Type("array<Jvital\Idml\XML\BackingStory\XmlElement>")
    * @XmlList(inline = true, entry = "XMLElement")
    */
    private array $children;

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
}