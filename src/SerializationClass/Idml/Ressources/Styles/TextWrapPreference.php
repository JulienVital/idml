<?php
namespace Jvital\Idml\SerializationClass\Idml\Ressources\Styles;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Trait\Properties;

/** 
 * @XmlRoot("TextWrapPreference") 
*/
class TextWrapPreference
{
    use Properties;

    /**
     * @XmlAttribute
     * @SerializedName("Inverse")
     */
    private bool $inverse;

    /**
     * @XmlAttribute
     * @SerializedName("ApplyToMasterPageOnly")
     */
    private bool $applyToMasterPageOnly;

    /**
     * @XmlAttribute
     * @SerializedName("TextWrapSide")
     */
    private string $textWrapSide;

    /**
     * @XmlAttribute
     * @SerializedName("TextWrapMode")
     */
    private string $textWrapMode;
    
    /**
     * @SerializedName("ContourOption")
     */
    private ContourOption $contourOption;
}
