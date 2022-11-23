<?php
namespace Jvital\Idml\SerializationClass\Ressources\Fonts;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
use Jvital\Idml\SerializationClass\Trait\FontFamilyAttribute;
use Jvital\Idml\SerializationClass\Trait\FontStyleNameAttribute;
use Jvital\Idml\SerializationClass\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Trait\PostScriptNameAttribute;
use Jvital\Idml\SerializationClass\Trait\SelfAttribute;

/** 
 * @XmlRoot("Font") 
*/
class Font
{

    use SelfAttribute;
    use FontFamilyAttribute;
    use NameAttribute;
    use PostScriptNameAttribute;
    use FontStyleNameAttribute;
    /**
     * @XmlAttribute
     * @SerializedName("Status")
     */
    private string $status = "Unknown";

    /**
     * @XmlAttribute
     * @SerializedName("FontType")
     */
    private string $fontType = "Unknown";

    /**
     * @XmlAttribute
     * @SerializedName("WritingScript")
     */
    private int $writingScript = 0; 
}
