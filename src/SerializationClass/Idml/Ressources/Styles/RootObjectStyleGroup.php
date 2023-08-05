<?php
namespace Jvital\Idml\SerializationClass\Idml\Ressources\Styles;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use Jvital\Idml\SerializationClass\Idml\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\SelfAttribute;


/** 
 * @XmlRoot("RootObjectStyleGroup") 
*/
class RootObjectStyleGroup{

    use SelfAttribute;
    use NameAttribute;

    /**
     * @SerializedName("ObjectStyle")
     * @Type("array<Jvital\Idml\SerializationClass\Idml\Ressources\Styles\ObjectStyle>")
     * @XmlList(inline = true, entry = "ObjectStyle")
     */
    private array $objectStyle;
}