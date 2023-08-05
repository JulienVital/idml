<?php
namespace Jvital\Idml\SerializationClass\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Trait\AppliedObjectStyleAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\ContentTypeAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\ItemLayerAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\ItemTransformAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\LockedAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\Properties;
use Jvital\Idml\SerializationClass\Idml\Trait\SelfAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\StoryTitleAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\VisibleAttribute;

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

    
    /**
     * @SerializedName("Image")
     */
    private Image $image;

}
