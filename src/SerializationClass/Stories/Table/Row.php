<?php
namespace Jvital\Idml\SerializationClass\Stories\Table;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Trait\SelfAttribute;
use Jvital\Idml\SerializationClass\Trait\SingleColumnWidthAttribute;
use Jvital\Idml\SerializationClass\Trait\SingleRowHeightAttribute;
use Jvital\Idml\SerializationClass\Trait\TextTableInsetAttribute;

/** 
 * @XmlRoot("Row") 
*/
class Row
{

    use SelfAttribute;
    use NameAttribute;
    use TextTableInsetAttribute;
    use SingleRowHeightAttribute;
}
