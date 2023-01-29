<?php
namespace Jvital\Idml\SerializationClass\Stories\Table;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Trait\AppliedCellStyleAttribute;
use Jvital\Idml\SerializationClass\Trait\ColumnSpanAttribute;
use Jvital\Idml\SerializationClass\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Trait\RowSpanAttribute;
use Jvital\Idml\SerializationClass\Trait\SelfAttribute;
use Jvital\Idml\SerializationClass\Trait\TextTableInsetAttribute;
use Jvital\Idml\SerializationClass\Trait\TextTypeCellAttribute;
use Jvital\Idml\SerializationClass\XML\BackingStory\XmlElement;

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

}
