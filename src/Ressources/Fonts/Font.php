<?php
namespace Jvital\Idml\Ressources\Fonts;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
use Jvital\Idml\Trait\FontFamilyAttribute;
use Jvital\Idml\Trait\FontStyleNameAttribute;
use Jvital\Idml\Trait\NameAttribute;
use Jvital\Idml\Trait\PostScriptNameAttribute;
use Jvital\Idml\Trait\SelfAttribute;

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
