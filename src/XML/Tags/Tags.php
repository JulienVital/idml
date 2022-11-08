<?php
namespace Jvital\Idml\XML\Tags;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\Type;
use Jvital\Idml\Utils\IdpkgWrapper;
use Jvital\Idml\XML\Tags\XmlTag;

/** 
 * @XmlRoot("idPkg:Tags") 
*/
class Tags extends IdpkgWrapper {

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

	