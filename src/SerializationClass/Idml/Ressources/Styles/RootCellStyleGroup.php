<?php
namespace Jvital\Idml\SerializationClass\Idml\Ressources\Styles;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use Jvital\Idml\SerializationClass\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Trait\SelfAttribute;


/** 
 * @XmlRoot("RootCellStyleGroup") 
*/
class RootCellStyleGroup{

    use SelfAttribute;
    use NameAttribute;

    /**
     * @SerializedName("CellStyle")
     * @Type("array<Jvital\Idml\SerializationClass\Idml\Ressources\Styles\CellStyle>")
     * @XmlList(inline = true, entry = "CellStyle")
     */
    private array $celStyle;
}