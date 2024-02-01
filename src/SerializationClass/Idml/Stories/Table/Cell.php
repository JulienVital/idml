<?php
namespace Jvital\Idml\SerializationClass\Idml\Stories\Table;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Trait\AppliedCellStyleAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\ColumnSpanAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\RowSpanAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\SelfAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\TextTableInsetAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\TextTypeCellAttribute;
use Jvital\Idml\SerializationClass\Idml\XML\BackingStory\XmlElement;

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
     * @var                          XmlElement
     * @SerializedName("XMLElement")
     */
    private XmlElement $xmlElement;

}
