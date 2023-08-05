<?php
namespace Jvital\Idml\SerializationClass\Idml\Properties;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Properties\Value\GraphicBounds;
use Jvital\Idml\SerializationClass\Idml\Properties\Value\Profile;
use Jvital\Idml\SerializationClass\Idml\Properties\Value\TextWrapOffset;
use Jvital\Idml\SerializationClass\Idml\Trait\AppliedFontValue;
use Jvital\Idml\SerializationClass\Idml\Trait\BasedOnValue;
use Jvital\Idml\SerializationClass\Idml\Trait\BaselineFrameGridColorValue;
use Jvital\Idml\SerializationClass\Idml\Trait\InsetSpacingValue;
use Jvital\Idml\SerializationClass\Idml\Trait\Label;
use Jvital\Idml\SerializationClass\Idml\Trait\LeadingValue;
use Jvital\Idml\SerializationClass\Idml\Trait\ParagraphBorderColorValue;
use Jvital\Idml\SerializationClass\Idml\Trait\ParagraphBorderTypeValue;
use Jvital\Idml\SerializationClass\Idml\Trait\RasterVectorBalance;
use Jvital\Idml\SerializationClass\Idml\Utils\Properties\PathGeometry;

/** 
 * @XmlRoot("Properties") 
*/
class Properties 
{
    use RasterVectorBalance;
    use Label;
    use BasedOnValue;
    use LeadingValue;
    use AppliedFontValue;
    use ParagraphBorderColorValue;
    use ParagraphBorderTypeValue;
    use InsetSpacingValue;
    use BaselineFrameGridColorValue;

    /**
     * @SerializedName("PathGeometry")
     */
    private PathGeometry $pathGeometry;

    /**
     * @SerializedName("TextWrapOffset")
     */
    private TextWrapOffset $textWrapOffset;

    /**
     * @SerializedName("Profile")
     */
    private Profile $profile;

    /**
     * @SerializedName("GraphicBounds")
     */
    private GraphicBounds $graphicBounds;
}
