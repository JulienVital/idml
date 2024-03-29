<?php
namespace Jvital\Idml\SerializationClass\Idml\Ressources\Styles;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use Jvital\Idml\SerializationClass\Idml\Trait\SelfAttribute;


/** 
 * @XmlRoot("RootTableStyleGroup") 
 */
class RootTableStyleGroup
{

    use SelfAttribute;

    /**
     * @SerializedName("TableStyle")
     * @Type("array<Jvital\Idml\SerializationClass\Idml\Ressources\Styles\TableStyle>")
     * @XmlList(inline                                                                  = true, entry = "TableStyle")
     */
    private array $tableStyle;
}