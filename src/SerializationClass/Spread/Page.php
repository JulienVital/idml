<?php
namespace Jvital\Idml\SerializationClass\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Trait\GeometricBoundsAttribute;
use Jvital\Idml\SerializationClass\Trait\ItemTransformAttribute;
use Jvital\Idml\SerializationClass\Trait\SelfAttribute;


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
