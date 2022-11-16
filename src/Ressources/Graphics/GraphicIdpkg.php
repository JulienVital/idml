<?php
namespace Jvital\Idml\Ressources\Graphics;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Utils\IdpkgWrapper;

/** 
 * @XmlRoot("idPkg:Graphic") 
*/
class GraphicIdpkg extends IdpkgWrapper{

    /**
    * @SerializedName("Color")
    */
    private Color $color;
}