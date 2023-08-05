<?php
namespace Jvital\Idml\SerializationClass\Idml\Stories;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\AppliedParagraphStyleAttribute;

/** 
 * @XmlRoot("ParagraphStyleRange") 
*/
class ParagraphStyleRange
{
    /**
     * @var CharacterStyleRange
     * @SerializedName("CharacterStyleRange")
     */
    private CharacterStyleRange $characterStyleRange;

    use AppliedParagraphStyleAttribute;

    /**
     * Get the value of CharacterStyleRange
     */
    public function getCharacterStyleRange(): CharacterStyleRange
    {
        return $this->characterStyleRange;
    }

    /**
     * Set the value of CharacterStyleRange
     */
    public function setCharacterStyleRange(CharacterStyleRange $CharacterStyleRange): self
    {
        $this->characterStyleRange = $CharacterStyleRange;

        return $this;
    }
}