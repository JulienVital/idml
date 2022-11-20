<?php
namespace Jvital\Idml\Ressources\Styles;
use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\Trait\BaselineShiftAttribute;
use Jvital\Idml\Trait\CapitalizationAttribute;
use Jvital\Idml\Trait\FontStyleAttribute;
use Jvital\Idml\Trait\HorizontalScaleAttribute;
use Jvital\Idml\Trait\ImportedAttribute;
use Jvital\Idml\Trait\NameAttribute;
use Jvital\Idml\Trait\NextStyleAttribute;
use Jvital\Idml\Trait\PointSizeAttribute;
use Jvital\Idml\Trait\Properties;
use Jvital\Idml\Trait\SelfAttribute;
use Jvital\Idml\Trait\SkewAttribute;
use Jvital\Idml\Trait\StrikeThruAttribute;
use Jvital\Idml\Trait\TrackingAttribute;
use Jvital\Idml\Trait\UnderlineAttribute;
use Jvital\Idml\Trait\VerticalScaleAttribute;

/** 
 * @XmlRoot("ParagraphStyle") 
*/
class ParagraphStyle{

    use SelfAttribute;
    use NameAttribute;
    use ImportedAttribute;
    use NextStyleAttribute;
    use Properties;
    use FontStyleAttribute;
    use PointSizeAttribute;
    use TrackingAttribute;
    use CapitalizationAttribute;
    use UnderlineAttribute;
    use StrikeThruAttribute;
    use HorizontalScaleAttribute;
    use BaselineShiftAttribute;
    use VerticalScaleAttribute;
    use SkewAttribute;
}