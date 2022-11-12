<?php
namespace Jvital\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Trait\GeometricBoundsAttribute;
use Jvital\Idml\Trait\ItemTransformAttribute;
use Jvital\Idml\Trait\SelfAttribute;


/** 
 * @XmlRoot("Spread") 
*/
class Page
{
    use SelfAttribute;
    use GeometricBoundsAttribute;
    use ItemTransformAttribute;
    function __construct($self){
        $this->self = $self;
    }

    /**
     * @SerializedName("MarginPreference")
     */
    private MarginPreference $marginPreference;

    /**
     * Get the value of marginPreference
     */
    public function getMarginPreference(): MarginPreference
    {
        return $this->marginPreference;
    }

    /**
     * Set the value of marginPreference
     */
    public function setMarginPreference(MarginPreference $marginPreference): self
    {
        $this->marginPreference = $marginPreference;

        return $this;
    }
}
