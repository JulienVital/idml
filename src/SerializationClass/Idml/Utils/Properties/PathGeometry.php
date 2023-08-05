<?php
namespace Jvital\Idml\SerializationClass\Idml\Utils\Properties;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/** 
 * @XmlRoot("PathGeometry") 
*/
class PathGeometry 
{
    /**
     * @SerializedName("GeometryPathType")
     */
    private GeometryPathType $geometryPathType;

    /**
     * Get the value of geometryPathType
     */
    public function getGeometryPathType(): GeometryPathType
    {
        return $this->geometryPathType;
    }

    /**
     * Set the value of geometryPathType
     */
    public function setGeometryPathType(GeometryPathType $geometryPathType): self
    {
        $this->geometryPathType = $geometryPathType;

        return $this;
    }
}