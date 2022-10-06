<?php
namespace Jvital\Idml\Stories;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;

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