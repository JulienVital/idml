<?php
namespace Jvital\Idml\XML\BackingStory;

use Jvital\Idml\XML\Tags\XmlTag;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/** 
 * @XmlRoot("XmlElement") 
*/
class XmlElement
{
    /**
     * @XmlAttribute
     * @SerializedName("MarkupTag")
     */
    private string $xmlTag;

    /**
     * @XmlAttribute
     * @SerializedName("XMLContent")
     */
    private string $xmlContent;

    /**
     * @XmlAttribute
     * @SerializedName("Self")
     */
    private string $id;

    /**
    * @var XmlElement[]
    *
    * @Type("array<Jvital\Idml\XML\BackingStory\XmlElement>")
    * @XmlList(inline = true, entry = "XmlElement")
    */
    private array $children;

    public function getXmlTag(): string
    {
        return $this->xmlTag;
    }

    public function setXmlTag(string|XmlTag $xmlTag): self
    {
        if ($xmlTag instanceof XmlTag){
            $this->xmlTag = $xmlTag->getId();
            return $this;
        }
        $this->xmlTag = $xmlTag;

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