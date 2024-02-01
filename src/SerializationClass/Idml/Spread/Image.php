<?php
namespace Jvital\Idml\SerializationClass\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\Idml\Trait\AppliedObjectStyleAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\ItemTransformAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\Properties;
use Jvital\Idml\SerializationClass\Idml\Trait\SelfAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\SpaceAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\VisibleAttribute;
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
