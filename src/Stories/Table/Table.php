<?php
namespace Jvital\Idml\Stories\Table;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\Trait\AppliedTableStyleAttribute;
use Jvital\Idml\Trait\BodyRowCountAttribute;
use Jvital\Idml\Trait\ColumnCountAttribute;
use Jvital\Idml\Trait\FooterRowCountAttribute;
use Jvital\Idml\Trait\HeaderRowCountAttribute;
use Jvital\Idml\Trait\SelfAttribute;
use Jvital\Idml\Trait\TextTableInsetAttribute;
use Jvital\Idml\Trait\TableDirectionAttribute;

/** 
 * @XmlRoot("Table") 
*/
class Table
{

    use SelfAttribute;
    use HeaderRowCountAttribute;
    use FooterRowCountAttribute;
    use TextTableInsetAttribute;
    use BodyRowCountAttribute;
    use ColumnCountAttribute;
    use AppliedTableStyleAttribute;
    use TableDirectionAttribute;
    // use NameAttribute;
    // use RowSpanAttribute;
    // use ColumnSpanAttribute;
    // use TextTypeCellAttribute;
    // use AppliedCellStyleAttribute;
    // /**
    //  * @var XmlElement
    //  * @SerializedName("XMLElement")
    //  */
    // private XmlElement $xmlElement;

}
