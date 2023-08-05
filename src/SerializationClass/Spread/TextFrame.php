<?php
namespace Jvital\Idml\SerializationClass\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\Idml\Enums\ContentTypeOptions;
use Jvital\Idml\SerializationClass\Trait\AppliedObjectStyleAttribute;
use Jvital\Idml\SerializationClass\Trait\ContentTypeAttribute;
use Jvital\Idml\SerializationClass\Trait\ItemTransformAttribute;
use Jvital\Idml\SerializationClass\Trait\LockedAttribute;
use Jvital\Idml\SerializationClass\Trait\ParentStoryAttribute;
use Jvital\Idml\SerializationClass\Trait\Properties;
use Jvital\Idml\SerializationClass\Trait\SelfAttribute;


/** 
 * @XmlRoot("TextFrame") 
*/
class TextFrame
{
    use SelfAttribute;
    use ParentStoryAttribute;
    use ContentTypeAttribute;
    use ItemTransformAttribute;
    use LockedAttribute;
    use AppliedObjectStyleAttribute;
    use Properties;
    function __construct($self){
        $this->self = $self;
    }


}
