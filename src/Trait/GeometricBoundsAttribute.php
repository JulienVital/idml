<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add a GeometricBounds Attribute
 */
trait GeometricBoundsAttribute {
    
    /**
     * @SerializedName("GeometricBounds")
     * @XmlAttribute
     */
    private string $geometricBounds;


    /**
     * Get the value of geometricBounds
     */
    public function getGeometricBounds(): string
    {
        return $this->geometricBounds;
    }

    /**
     * Set the value of geometricBounds
     */
    public function setGeometricBounds(string $geometricBounds): self
    {
        $this->geometricBounds = $geometricBounds;

        return $this;
    }
}
