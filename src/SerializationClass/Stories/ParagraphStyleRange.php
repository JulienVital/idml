<?php
namespace Jvital\Idml\SerializationClass\Stories;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

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
     * @var string
     * @XmlAttribute
     * @SerializedName("AppliedParagraphStyle")
     */
    private string $appliedParagraphStyle='ParagraphStyle/$ID/NormalParagraphStyle';

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

    public function getAppliedParagraphStyle(){
        return $this->appliedParagraphStyle;
    }

    public function setAppliedParagraphStyle(string $paragraphStyleName){
        $this->appliedParagraphStyle = 'ParagraphStyle/$ID/'.$paragraphStyleName;
        return $this;

    }
}