<?php
namespace Jvital\Idml\SerializationClass\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\Idml\Enums\ContentTypeOptions;
use Jvital\Idml\SerializationClass\Idml\Trait\AppliedObjectStyleAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\ContentTypeAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\ItemTransformAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\LockedAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\ParentStoryAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\Properties;
use Jvital\Idml\SerializationClass\Idml\Trait\SelfAttribute;


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
