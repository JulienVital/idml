<?php
namespace Jvital\Idml\SerializationClass\Idml\Properties\Value;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/** 
 * @XmlRoot("GraphicBounds") 
*/
class GraphicBounds
{

    /**
     * @XmlAttribute
     * @SerializedName("Left")
     */
    private float $left;

    /**
     * @XmlAttribute
     * @SerializedName("Top")
     */
    private float $top;

    /**
     * @XmlAttribute
     * @SerializedName("Right")
     */
    private float $right;

        /**
     * @XmlAttribute
     * @SerializedName("Bottom")
     */
    private float $bottom;
}
