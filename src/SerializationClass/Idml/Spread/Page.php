<?php
namespace Jvital\Idml\SerializationClass\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Trait\GeometricBoundsAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\ItemTransformAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\SelfAttribute;


/** 
 * @XmlRoot("Spread") 
 */
class Page
{
    use SelfAttribute;
    use GeometricBoundsAttribute;
    use ItemTransformAttribute;
    function __construct($self)
    {
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
