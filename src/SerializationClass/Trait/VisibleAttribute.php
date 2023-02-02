<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add a Visible Attribute
 */
trait VisibleAttribute {
    
    /**
     * @SerializedName("Visible")
     * @XmlAttribute
     */
    private bool $visible;

    /**
     * Get the value of visible
     */
    public function isVisible(): bool
    {
        return $this->visible;
    }

    /**
     * Set the value of visible
     */
    public function setVisible(bool $visible): self
    {
        $this->visible = $visible;

        return $this;
    }
}
