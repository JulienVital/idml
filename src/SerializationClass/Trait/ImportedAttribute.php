<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a imported attribute
 */
trait ImportedAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("Imported")
     */
    private bool $imported;

    /**
     * Get the value of imported
     */
    public function isImported(): bool
    {
        return $this->imported;
    }

    /**
     * Set the value of imported
     */
    public function setImported(bool $imported): self
    {
        $this->imported = $imported;

        return $this;
    }
}
