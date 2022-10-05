<?php
namespace Jvital\Idml\XML\Tags;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/** 
 * @XmlRoot("XMLTag") 
*/
class XMLTag {

/**
 * @XmlAttribute
 * @SerializedName("Self")
 */
private string $self;

/**
 * @XmlAttribute
 * @SerializedName("Name")
 */
private string $name;


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
  $name = str_replace(' ', '_', $name);
  $this->name = $name;
  $this->self = "XMLTag/$name";

  return $this;
  }
}
