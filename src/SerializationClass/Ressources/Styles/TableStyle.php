<?php
namespace Jvital\Idml\SerializationClass\Ressources\Styles;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Trait\Properties;

/** 
 * @XmlRoot("TableStyle") 
*/
class TableStyle
{
    use Properties;
    /**
     * @XmlAttribute
     * @SerializedName("Self")
     */
    private string $self;

}
