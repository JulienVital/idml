<?php
namespace Jvital\Idml\SerializationClass\Idml\Properties\Value;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;


/** 
 * @XmlRoot("TextWrapOffset") 
*/
class TextWrapOffset
{
    /**
     * @XmlAttribute
     * @SerializedName("Top")
     */
    private int $top;

    /**
     * @XmlAttribute
     * @SerializedName("Left")
     */
    private int $left;

    /**
     * @XmlAttribute
     * @SerializedName("Bottom")
     */
    private int $bottom; 

    /**
     * @XmlAttribute
     * @SerializedName("Right")
     */
    private int $right;
}
