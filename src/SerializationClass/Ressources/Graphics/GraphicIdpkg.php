<?php
namespace Jvital\Idml\SerializationClass\Ressources\Graphics;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use Jvital\Idml\SerializationClass\Utils\IdpkgWrapper;

/** 
 * @XmlRoot("idPkg:Graphic") 
*/
class GraphicIdpkg extends IdpkgWrapper{

    /**
     * @Type("array<Jvital\Idml\SerializationClass\Ressources\Graphics\Color>")
     * @XmlList(inline = true, entry = "Color")
     */
    private array $color;
}