<?php
namespace Jvital\Idml\Ressources\Fonts;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use Jvital\Idml\Utils\IdpkgWrapper;

/** 
 * @XmlRoot("idPkg:Fonts") 
*/
class FontIdpkg extends IdpkgWrapper
{

    /**
     * @SerializedName("FontFamily")
     * @Type("array<Jvital\Idml\Ressources\Fonts\FontFamily>")
     * @XmlList(inline = true, entry = "FontFamily")
     */
    private array $fontFamily;

    /**
     * Get the value of fontFamily
     */
    public function getFontFamily(): array
    {
        return $this->fontFamily;
    }

    /**
     * Set the value of fontFamily
     */
    public function setFontFamily(array $fontFamily): self
    {
        $this->fontFamily = $fontFamily;

        return $this;
    }
}
