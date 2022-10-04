<?php
namespace Jvital\Idml\Structure\Tags;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\Type;
use Jvital\Idml\Structure\Tags\XMLTag;

/** 
 * @XmlRoot("idPkg:Tags") 
 * @XmlNamespace(uri="http://ns.adobe.com/AdobeInDesign/idml/1.0/packaging", prefix="idPkg")
*/
class Tags {

  /**
  * @XmlAttribute
  * @SerializedName("DOMVersion")
  */
  private string $DOMVersion = "17.0";

  /**
  * @var XMLTag[]
  *
  * @Type("array<Jvital\Idml\Structure\Tags\XMLTag>")
  * @XmlList(inline = true, entry = "XMLTag")
  */
  public $XMLTags = [];



  /**
   * Get the value of XMLTags
   */
  public function getXMLTags(): array
  {
    return $this->XMLTags;
  }

  /**
   * @var XMLTag[]
   * Set the value of XMLTags
   */
  public function setXMLTags(array $XMLTags): self
  {
    if (is_array($XMLTags)){
      $this->XMLTags = array_merge($XMLTags, $this->XMLTags);
      return $this;
    }

  }
  /**
   * add a XMLTag
   */
  public function addXMLTags(XMLTag $XMLTags): self
  {
    $this->XMLTags[] = $XMLTags;
    return $this;

  }

}

	