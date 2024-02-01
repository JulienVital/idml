<?php
namespace Jvital\Idml\SerializationClass\Idml\Utils\Properties;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;

/** 
 * @XmlRoot("PathPointArray") 
 */
class PathPointArray
{
    /**
     * @Type("array<Jvital\Idml\SerializationClass\Idml\Utils\Properties\PathPointType>")
     * @XmlList(inline                                                                    = true, entry = "PathPointType")
     */
    private $pathPointType;

    /**
     * Get the value of pathPointType
     */
    public function getPathPointType()
    {
        return $this->pathPointType;
    }

    /**
     * Set the value of pathPointType
     */
    public function setPathPointType($pathPointType): self
    {
        $this->pathPointType = $pathPointType;

        return $this;
    }
}