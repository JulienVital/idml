<?php
namespace Jvital\Idml\Designmap;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Trait\NameAttribute;
use Jvital\Idml\Trait\SelfAttribute;
use Jvital\Idml\Trait\StoryListAttribute;
use Jvital\Idml\Trait\ZeroPointAttribute;
use Jvital\Idml\Utils\IdpkgWrapper;

/** 
 * @XmlRoot("Document") 
*/
class DocumentIdpkg extends IdpkgWrapper
{

    use SelfAttribute;
    use StoryListAttribute;
    use NameAttribute;
    use ZeroPointAttribute;

    /**
    * @SerializedName("idPkg:Graphic")
    */
    private idPkgGraphic $graphic;

    /**
    * @SerializedName("idPkg:Fonts")
    */
    private idPkgFonts $fonts;

    /**
    * @SerializedName("idPkg:Styles")
    */
    private IdpkgStyles $styles;

    /**
    * @SerializedName("idPkg:Tags")
    */
    private IdpkgTags $tags;
}
