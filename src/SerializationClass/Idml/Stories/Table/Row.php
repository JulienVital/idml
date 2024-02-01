<?php
namespace Jvital\Idml\SerializationClass\Idml\Stories\Table;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\Idml\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\SelfAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\SingleColumnWidthAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\SingleRowHeightAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\TextTableInsetAttribute;

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
