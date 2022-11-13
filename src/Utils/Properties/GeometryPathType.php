<?php
namespace Jvital\Idml\Utils\Properties;

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
    private PathPointArray $PathPointArray;

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
}