<?php
namespace Jvital\Idml\SerializationClass\Ressources\Styles;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use Jvital\Idml\SerializationClass\Utils\IdpkgWrapper;

/** 
 * @XmlRoot("idPkg:Styles") 
*/
class StylesIdpkg extends IdpkgWrapper{

    /**
     * @SerializedName("ParagraphStyle")
     * @Type("array<Jvital\Idml\SerializationClass\Ressources\Styles\ParagraphStyle>")
     * @XmlList(inline = true, entry = "ParagraphStyle")
     */
    private array $paragraphStyle;

    /**
     * @SerializedName("RootParagraphStyleGroup")
     */
    private RootParagraphStyleGroup $rootParagraphStyleGroup;

    
    /**
     * @SerializedName("RootObjectStyleGroup")
     */
    private RootObjectStyleGroup $rootObjectStyleGroup;

    /**
     * @SerializedName("RootCellStyleGroup")
     */
    private RootCellStyleGroup $rootCellStyleGroup;
}