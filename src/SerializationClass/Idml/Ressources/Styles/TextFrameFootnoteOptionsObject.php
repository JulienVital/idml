<?php
namespace Jvital\Idml\SerializationClass\Idml\Ressources\Styles;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/** 
 * @XmlRoot("TextFrameFootnoteOptionsObject") 
 */
class TextFrameFootnoteOptionsObject
{

    /**
     * @XmlAttribute
     * @SerializedName("EnableOverrides")
     */
    private bool $enableOverrides;

    /**
     * @XmlAttribute
     * @SerializedName("SpanFootnotesAcross")
     */
    private bool $spanFootnotesAcross;

    /**
     * @XmlAttribute
     * @SerializedName("MinimumSpacingOption")
     */
    private int $minimumSpacingOption;

    /**
     * @XmlAttribute
     * @SerializedName("SpaceBetweenFootnotes")
     */
    private int $spaceBetweenFootnotes;
}
