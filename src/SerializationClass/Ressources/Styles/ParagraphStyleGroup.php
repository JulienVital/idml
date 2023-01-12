<?php
namespace Jvital\Idml\SerializationClass\Ressources\Styles;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use Jvital\Idml\SerializationClass\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Trait\SelfAttribute;


/** 
 * @XmlRoot("ParagraphStyleGroup") 
*/
class ParagraphStyleGroup{

    use SelfAttribute;
    use NameAttribute;

    /**
     * @SerializedName("ParagraphStyle")
     * @Type("array<Jvital\Idml\SerializationClass\Ressources\Styles\ParagraphStyle>")
     * @XmlList(inline = true, entry = "ParagraphStyle")
     */
    private array $paragraphStyle;
}