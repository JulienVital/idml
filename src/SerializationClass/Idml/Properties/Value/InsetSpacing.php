<?php
namespace Jvital\Idml\SerializationClass\Idml\Properties\Value;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use Jvital\Idml\SerializationClass\Trait\TypeAttribute;

/** 
 * @XmlRoot("InsetSpacing") 
*/
class InsetSpacing
{

    use TypeAttribute;
    /**
     * @SerializedName("ListItem")
     * @Type("array<Jvital\Idml\SerializationClass\Idml\Properties\Value\ListItem>")
     * @XmlList(inline = true, entry = "ListItem")
     */
    private array $listItem;

    /**
     * Get the value of listItem
     */
    public function getListItem(): array
    {
        return $this->listItem;
    }

    /**
     * Set the value of listItem
     */
    public function setListItem(array $listItem): self
    {
        $this->listItem = $listItem;

        return $this;
    }
}
