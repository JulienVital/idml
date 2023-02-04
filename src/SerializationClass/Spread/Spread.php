<?php
namespace Jvital\Idml\SerializationClass\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\Trait\AllowPageShuffleAttribute;
use Jvital\Idml\SerializationClass\Trait\BindingLocationAttribute;
use Jvital\Idml\SerializationClass\Trait\FlattenerOverrideAttribute;
use Jvital\Idml\SerializationClass\Trait\ItemTransformAttribute;
use Jvital\Idml\SerializationClass\Trait\PageCountAttribute;
use Jvital\Idml\SerializationClass\Trait\PageTransitionDirectionAttribute;
use Jvital\Idml\SerializationClass\Trait\PageTransitionTypeAttribute;
use Jvital\Idml\SerializationClass\Trait\SelfAttribute;
use Jvital\Idml\SerializationClass\Trait\ShowMasterItemsAttribute;
use Jvital\Idml\SerializationClass\Trait\PageTransitionDurationAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Trait\Page;
use Jvital\Idml\SerializationClass\Trait\TextFrame;

/** 
 * @XmlRoot("Spread") 
*/
class Spread
{
    use SelfAttribute;
    use FlattenerOverrideAttribute;
    use AllowPageShuffleAttribute;
    use ItemTransformAttribute;
    use ShowMasterItemsAttribute;
    use PageCountAttribute;
    use BindingLocationAttribute;
    use PageTransitionTypeAttribute;
    use PageTransitionDirectionAttribute; 
    use PageTransitionDurationAttribute;
    use Page;
    use TextFrame;
    
    function __construct($self){
        $this->self = $self;
    }

    /**
    * @SerializedName("FlattenerPreference")
    */
    private FlattenerPreference $flattenerPreference;

    /**
    * @SerializedName("Rectangle")
    */
    private Rectangle $rectangle;
}
