<?php
namespace Jvital\Idml\Ressources\Styles;
use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\Trait\BaselineShiftAttribute;
use Jvital\Idml\Trait\CapitalizationAttribute;
use Jvital\Idml\Trait\FirstLineIndentAttribute;
use Jvital\Idml\Trait\FontStyleAttribute;
use Jvital\Idml\Trait\HorizontalScaleAttribute;
use Jvital\Idml\Trait\ImportedAttribute;
use Jvital\Idml\Trait\JustificationAttribute;
use Jvital\Idml\Trait\LastLineIndentAttribute;
use Jvital\Idml\Trait\LeftIndentAttribute;
use Jvital\Idml\Trait\NameAttribute;
use Jvital\Idml\Trait\NextStyleAttribute;
use Jvital\Idml\Trait\ParagraphBorderBottomLineWeightAttribute;
use Jvital\Idml\Trait\ParagraphBorderLeftLineWeightAttribute;
use Jvital\Idml\Trait\ParagraphBorderOnAttribute;
use Jvital\Idml\Trait\ParagraphBorderRightLineWeightAttribute;
use Jvital\Idml\Trait\ParagraphBorderTopLineWeightAttribute;
use Jvital\Idml\Trait\PointSizeAttribute;
use Jvital\Idml\Trait\Properties;
use Jvital\Idml\Trait\RightIndentAttribute;
use Jvital\Idml\Trait\SelfAttribute;
use Jvital\Idml\Trait\SkewAttribute;
use Jvital\Idml\Trait\SpaceAfterAttribute;
use Jvital\Idml\Trait\SpaceBeforeAttribute;
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
    use LeftIndentAttribute; 
    use RightIndentAttribute; 
    use FirstLineIndentAttribute; 
    use SpaceBeforeAttribute; 
    use SpaceAfterAttribute; 
    use LastLineIndentAttribute; 
    use JustificationAttribute;
    use ParagraphBorderOnAttribute;
    use ParagraphBorderTopLineWeightAttribute;
    use ParagraphBorderBottomLineWeightAttribute;
    use ParagraphBorderLeftLineWeightAttribute;
    use ParagraphBorderRightLineWeightAttribute;
}