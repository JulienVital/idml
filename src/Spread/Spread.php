<?php
namespace Jvital\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\Trait\AllowPageShuffleAttribute;
use Jvital\Idml\Trait\BindingLocationAttribute;
use Jvital\Idml\Trait\FlattenerOverrideAttribute;
use Jvital\Idml\Trait\ItemTransformAttribute;
use Jvital\Idml\Trait\PageCountAttribute;
use Jvital\Idml\Trait\PageTransitionDirectionAttribute;
use Jvital\Idml\Trait\PageTransitionTypeAttribute;
use Jvital\Idml\Trait\SelfAttribute;
use Jvital\Idml\Trait\ShowMasterItemsAttribute;
use Jvital\Idml\Trait\PageTransitionDurationAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Trait\Page;

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
    function __construct($self){
        $this->self = $self;
    }

    /**
    * @SerializedName("FlattenerPreference")
    */
    private FlattenerPreference $flattenerPreference;
}
