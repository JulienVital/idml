<?php
namespace Jvital\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\Trait\AllowPageShuffleAttribute;
use Jvital\Idml\Trait\BindingLocationAttribute;
use Jvital\Idml\Trait\FlattenerOverrideAttribute;
use Jvital\Idml\Trait\ItemTransformAttribute;
use Jvital\Idml\Trait\PageCountAttribute;
use Jvital\Idml\Trait\SelfAttribute;
use Jvital\Idml\Trait\ShowMasterItemsAttribute;

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

    // PageTransitionType="None" PageTransitionDirection="NotApplicable" PageTransitionDuration="Medium"
    function __construct($self){
        $this->self = $self;
    }
}
