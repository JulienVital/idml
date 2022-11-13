<?php
namespace Jvital\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\Enums\ContentTypeOptions;
use Jvital\Idml\Trait\AppliedObjectStyleAttribute;
use Jvital\Idml\Trait\ContentTypeAttribute;
use Jvital\Idml\Trait\ItemTransformAttribute;
use Jvital\Idml\Trait\LockedAttribute;
use Jvital\Idml\Trait\ParentStoryAttribute;
use Jvital\Idml\Trait\SelfAttribute;


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
    function __construct($self){
        $this->self = $self;
    }


}
