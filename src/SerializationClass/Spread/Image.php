<?php
namespace Jvital\Idml\SerializationClass\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\Trait\AppliedObjectStyleAttribute;
use Jvital\Idml\SerializationClass\Trait\ItemTransformAttribute;
use Jvital\Idml\SerializationClass\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Trait\Properties;
use Jvital\Idml\SerializationClass\Trait\SelfAttribute;
use Jvital\Idml\SerializationClass\Trait\SpaceAttribute;
use Jvital\Idml\SerializationClass\Trait\VisibleAttribute;
use JMS\Serializer\Annotation\SerializedName;
/** 
 * @XmlRoot("Image") 
*/
class Image
{
    use SelfAttribute;
    use AppliedObjectStyleAttribute;
    use ItemTransformAttribute;
    use SpaceAttribute;
    use NameAttribute;
    use VisibleAttribute;
    use Properties;

    /**
     * @SerializedName("Link")
     */
    private Link $link;
}
