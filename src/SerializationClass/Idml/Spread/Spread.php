<?php
namespace Jvital\Idml\SerializationClass\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\Exclude;
use Jvital\Idml\SerializationClass\Idml\Trait\AllowPageShuffleAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\BindingLocationAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\FlattenerOverrideAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\ItemTransformAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\PageCountAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\PageTransitionDirectionAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\PageTransitionTypeAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\SelfAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\ShowMasterItemsAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\PageTransitionDurationAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Trait\Page;
use Jvital\Idml\SerializationClass\Idml\Trait\TextFrame;

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
    use BindingLocationAttribute;
    use PageCountAttribute;
    use PageTransitionTypeAttribute;
    use PageTransitionDirectionAttribute; 
    use PageTransitionDurationAttribute;
    use Page;
    use TextFrame;
    
    function __construct(string $self){
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

    /**
    * @Exclude
    */
    public function getSpreadIdpkg():SpreadIdpkg{
        return new SpreadIdpkg($this);
    }

    /**
    * @Exclude
    */
    public function addPage($page):self{

        $this->page[] = $page;
        $this->setPageCount(count($this->page));
        return $this;
    }
}
