<?php
namespace Jvital\Idml\SerializationClass\Idml\Ressources\Styles;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use Jvital\Idml\SerializationClass\Idml\Trait\SelfAttribute;


/** 
 * @XmlRoot("RootParagraphStyleGroup") 
 */
class RootParagraphStyleGroup
{

    use SelfAttribute;

    /**
     * @SerializedName("ParagraphStyle")
     * @Type("array<Jvital\Idml\SerializationClass\Idml\Ressources\Styles\ParagraphStyle>")
     * @XmlList(inline                                                                      = true, entry = "ParagraphStyle")
     */
    private array $paragraphStyle;

    /**
     * @SerializedName("ParagraphStyleGroup")
     * @Type("array<Jvital\Idml\SerializationClass\Idml\Ressources\Styles\ParagraphStyleGroup>")
     * @XmlList(inline                                                                           = true, entry = "ParagraphStyleGroup")
     */
    private array $paragraphStyleGroup;
}