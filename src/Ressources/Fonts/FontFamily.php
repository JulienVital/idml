<?php
namespace Jvital\Idml\Ressources\Fonts;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use Jvital\Idml\Trait\NameAttribute;
use Jvital\Idml\Trait\SelfAttribute;

/** 
 * @XmlRoot("FontFamily") 
*/
class FontFamily
{

    use SelfAttribute;
    use NameAttribute;

    /**
     * @SerializedName("Font")
     * @Type("array<Jvital\Idml\Ressources\Fonts\Font>")
     * @XmlList(inline = true, entry = "Font")
     */
    private array $font;

    /**
     * Get the value of font
     */
    public function getFont(): array
    {
        return $this->font;
    }

    /**
     * Set the value of font
     */
    public function setFont(array $font): self
    {
        $this->font = $font;

        return $this;
    }
}
