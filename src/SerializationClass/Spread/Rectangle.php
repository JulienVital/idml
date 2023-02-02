<?php
namespace Jvital\Idml\SerializationClass\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\Trait\AppliedObjectStyleAttribute;
use Jvital\Idml\SerializationClass\Trait\ContentTypeAttribute;
use Jvital\Idml\SerializationClass\Trait\ItemLayerAttribute;
use Jvital\Idml\SerializationClass\Trait\ItemTransformAttribute;
use Jvital\Idml\SerializationClass\Trait\LockedAttribute;
use Jvital\Idml\SerializationClass\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Trait\Properties;
use Jvital\Idml\SerializationClass\Trait\SelfAttribute;
use Jvital\Idml\SerializationClass\Trait\StoryTitleAttribute;
use Jvital\Idml\SerializationClass\Trait\VisibleAttribute;

/** 
 * @XmlRoot("Rectangle") 
*/
class Rectangle
{
    use SelfAttribute;
    use AppliedObjectStyleAttribute;
    use ContentTypeAttribute;
    use ItemLayerAttribute;
    use ItemTransformAttribute;
    use LockedAttribute;
    use NameAttribute;
    use VisibleAttribute;
    use StoryTitleAttribute;
    use Properties;
    function __construct($self){
        $this->self = $self;
    }


}
