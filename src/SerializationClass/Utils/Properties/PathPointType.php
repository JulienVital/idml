<?php
namespace Jvital\Idml\SerializationClass\Utils\Properties;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/** 
 * @XmlRoot("PathPointType") 
*/
class PathPointType 
{

    /**
     * @SerializedName("Anchor")
     * @XmlAttribute
     */
    private string $anchor;

    /**
     * @SerializedName("LeftDirection")
     * @XmlAttribute
     */
    private string $leftDirection;

    /**
     * @SerializedName("RightDirection")
     * @XmlAttribute
     */
    private string $rightDirection;


    /**
     * Get the value of anchor
     */
    public function getAnchor(): string
    {
        return $this->anchor;
    }

    /**
     * Set the value of anchor
     */
    public function setAnchor(string $anchor): self
    {
        $this->anchor = $anchor;

        return $this;
    }

    /**
     * Get the value of leftDirection
     */
    public function getLeftDirection(): string
    {
        return $this->leftDirection;
    }

    /**
     * Set the value of leftDirection
     */
    public function setLeftDirection(string $leftDirection): self
    {
        $this->leftDirection = $leftDirection;

        return $this;
    }

    /**
     * Get the value of rightDirection
     */
    public function getRightDirection(): string
    {
        return $this->rightDirection;
    }

    /**
     * Set the value of rightDirection
     */
    public function setRightDirection(string $rightDirection): self
    {
        $this->rightDirection = $rightDirection;

        return $this;
    }
}