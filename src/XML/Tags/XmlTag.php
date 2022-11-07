<?php
namespace Jvital\Idml\XML\Tags;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/** 
 * @XmlRoot("XMLTag") 
*/
class XmlTag {
  
  public function __construct($name= ''){
    $name = $name ==='' ? uniqid(): $name;
    $this->setName($name);
  }
/**
 * @XmlAttribute
 * @SerializedName("Self")
 */
private string $id;

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
  $this->id = "XMLTag/$name";

  return $this;
  }

/**
 * Get the value of id
 */
public function getId(): string
{
return $this->id;
}
}
