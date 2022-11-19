<?php
namespace Jvital\Idml\Stories\Table;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Trait\AppliedCellStyleAttribute;
use Jvital\Idml\Trait\ColumnSpanAttribute;
use Jvital\Idml\Trait\NameAttribute;
use Jvital\Idml\Trait\RowSpanAttribute;
use Jvital\Idml\Trait\SelfAttribute;
use Jvital\Idml\Trait\TextTableInsetAttribute;
use Jvital\Idml\Trait\TextTypeCellAttribute;
use Jvital\Idml\XML\BackingStory\XmlElement;

/** 
 * @XmlRoot("Cell") 
*/
class Cell
{

    use SelfAttribute;
    use NameAttribute;
    use RowSpanAttribute;
    use ColumnSpanAttribute;
    use TextTypeCellAttribute;
    use TextTableInsetAttribute;
    use AppliedCellStyleAttribute;
    /**
     * @var XmlElement
     * @SerializedName("XMLElement")
     */
    private XmlElement $xmlElement;

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
}
