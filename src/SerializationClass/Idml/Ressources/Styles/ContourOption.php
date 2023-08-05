<?php
namespace Jvital\Idml\SerializationClass\Idml\Ressources\Styles;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Trait\Properties;

/** 
 * @XmlRoot("ContourOption") 
*/
class ContourOption
{
    /**
     * @XmlAttribute
     * @SerializedName("ContourType")
     */
    private string $contourType;

    /**
     * @XmlAttribute
     * @SerializedName("IncludeInsideEdges")
     */
    private bool $includeInsideEdges;

    /**
     * @XmlAttribute
     * @SerializedName("ContourPathName")
     */
    private string $contourPathName;

    /**
     * Get the value of contourType
     */
    public function getContourType(): string
    {
        return $this->contourType;
    }

    /**
     * Set the value of contourType
     */
    public function setContourType(string $contourType): self
    {
        $this->contourType = $contourType;

        return $this;
    }
}
