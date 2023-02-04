<?php
namespace Jvital\Idml\SerializationClass\Properties;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Properties\Value\GraphicBounds;
use Jvital\Idml\SerializationClass\Properties\Value\Profile;
use Jvital\Idml\SerializationClass\Properties\Value\TextWrapOffset;
use Jvital\Idml\SerializationClass\Trait\AppliedFontValue;
use Jvital\Idml\SerializationClass\Trait\BasedOnValue;
use Jvital\Idml\SerializationClass\Trait\BaselineFrameGridColorValue;
use Jvital\Idml\SerializationClass\Trait\InsetSpacingValue;
use Jvital\Idml\SerializationClass\Trait\Label;
use Jvital\Idml\SerializationClass\Trait\LeadingValue;
use Jvital\Idml\SerializationClass\Trait\ParagraphBorderColorValue;
use Jvital\Idml\SerializationClass\Trait\ParagraphBorderTypeValue;
use Jvital\Idml\SerializationClass\Trait\RasterVectorBalance;
use Jvital\Idml\SerializationClass\Utils\Properties\PathGeometry;

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
