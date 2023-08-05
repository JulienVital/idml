<?php
namespace Jvital\Idml\SerializationClass\Idml\Utils\Properties;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/** 
 * @XmlRoot("GeometryPathType") 
*/
class GeometryPathType 
{

    /**
     * @SerializedName("PathOpen")
     * @XmlAttribute
     */
    private bool $pathOpen= false;

    /**
     * @SerializedName("PathPointArray")
     */
    private PathPointArray $pathPointArray;

    /**
     * Get the value of pathOpen
     */
    public function isPathOpen(): bool
    {
        return $this->pathOpen;
    }

    /**
     * Set the value of pathOpen
     */
    public function setPathOpen(bool $pathOpen): self
    {
        $this->pathOpen = $pathOpen;

        return $this;
    }

    /**
     * Get the value of pathPointArray
     */
    public function getPathPointArray(): PathPointArray
    {
        return $this->pathPointArray;
    }

    /**
     * Set the value of pathPointArray
     */
    public function setPathPointArray(PathPointArray $pathPointArray): self
    {
        $this->pathPointArray = $pathPointArray;

        return $this;
    }
}