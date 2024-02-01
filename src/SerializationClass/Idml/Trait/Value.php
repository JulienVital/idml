<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlValue;

/**
 * This trait add a Value child
 */
trait Value
{
    
    /**
     * @XmlValue(cdata=false)
     */
    private string $value;

    /**
     * Get the value of value
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Set the value of value
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
