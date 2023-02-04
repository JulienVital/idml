<?php
namespace Jvital\Idml\SerializationClass\Properties\Value;
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

    /**
     * Get the value of left
     */
    public function getLeft(): float
    {
        return $this->left;
    }

    /**
     * Set the value of left
     */
    public function setLeft(float $left): self
    {
        $this->left = $left;

        return $this;
    }
}
