<?php
namespace Jvital\Idml\Stories\Table;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\Trait\NameAttribute;
use Jvital\Idml\Trait\SelfAttribute;
use Jvital\Idml\Trait\SingleColumnWidthAttribute;
use Jvital\Idml\Trait\TextTableInsetAttribute;

/** 
 * @XmlRoot("Column") 
*/
class Column
{

    use SelfAttribute;
    use NameAttribute;
    use TextTableInsetAttribute;
    use SingleColumnWidthAttribute;
}
