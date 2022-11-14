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
}
