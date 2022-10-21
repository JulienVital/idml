<?php
namespace Jvital\Idml\XML;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute as XmlAttributeJms;
use JMS\Serializer\Annotation\XmlRoot;

/** 
 * @XmlRoot("XmlAttribute") 
*/
class XmlAttribute
{
    /**
     * @XmlAttributeJms
     * @SerializedName("Self")
     */
    private string $id;
    
    /**
     * @XmlAttributeJms
     * @SerializedName("Name")
     */
    private string $name;
    
    /**
     * @XmlAttributeJms
     * @SerializedName("Value")
     */
    private string $value;
    

    /**
     * Get the value of id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

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