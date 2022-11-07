<?php
namespace Jvital\Idml\XML\Tags;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\Type;
use Jvital\Idml\XML\Tags\XmlTag;

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
  * @var XmlTag[]
  *
  * @Type("array<Jvital\Idml\XML\Tags\XmlTag>")
  * @XmlList(inline = true, entry = "XMLTag")
  */
  public $XMLTags = [];



  /**
   * Get the value of XMLTags
   */
  public function getMarkupTags(): array
  {
    return $this->XMLTags;
  }

  /**
   * @var XmlTag[]
   * Set the value of XMLTags
   */
  public function setMarkupTags(array $XMLTags): self
  {
    if (is_array($XMLTags)){
      $this->XMLTags = array_merge($XMLTags, $this->XMLTags);
      return $this;
    }

  }
  /**
   * add a XMLTag
   */
  public function addXMLTags(XmlTag $XMLTags): self
  {
    $this->XMLTags[] = $XMLTags;
    return $this;

  }

}

	