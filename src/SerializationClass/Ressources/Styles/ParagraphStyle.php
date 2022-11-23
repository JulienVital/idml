<?php
namespace Jvital\Idml\SerializationClass\Ressources\Styles;
use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\Trait\BaselineShiftAttribute;
use Jvital\Idml\SerializationClass\Trait\CapitalizationAttribute;
use Jvital\Idml\SerializationClass\Trait\FirstLineIndentAttribute;
use Jvital\Idml\SerializationClass\Trait\FontStyleAttribute;
use Jvital\Idml\SerializationClass\Trait\HorizontalScaleAttribute;
use Jvital\Idml\SerializationClass\Trait\ImportedAttribute;
use Jvital\Idml\SerializationClass\Trait\JustificationAttribute;
use Jvital\Idml\SerializationClass\Trait\LastLineIndentAttribute;
use Jvital\Idml\SerializationClass\Trait\LeftIndentAttribute;
use Jvital\Idml\SerializationClass\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Trait\NextStyleAttribute;
use Jvital\Idml\SerializationClass\Trait\ParagraphBorderBottomLineWeightAttribute;
use Jvital\Idml\SerializationClass\Trait\ParagraphBorderLeftLineWeightAttribute;
use Jvital\Idml\SerializationClass\Trait\ParagraphBorderOnAttribute;
use Jvital\Idml\SerializationClass\Trait\ParagraphBorderRightLineWeightAttribute;
use Jvital\Idml\SerializationClass\Trait\ParagraphBorderTopLineWeightAttribute;
use Jvital\Idml\SerializationClass\Trait\PointSizeAttribute;
use Jvital\Idml\SerializationClass\Trait\Properties;
use Jvital\Idml\SerializationClass\Trait\RightIndentAttribute;
use Jvital\Idml\SerializationClass\Trait\SelfAttribute;
use Jvital\Idml\SerializationClass\Trait\SkewAttribute;
use Jvital\Idml\SerializationClass\Trait\SpaceAfterAttribute;
use Jvital\Idml\SerializationClass\Trait\SpaceBeforeAttribute;
use Jvital\Idml\SerializationClass\Trait\StrikeThruAttribute;
use Jvital\Idml\SerializationClass\Trait\TrackingAttribute;
use Jvital\Idml\SerializationClass\Trait\UnderlineAttribute;
use Jvital\Idml\SerializationClass\Trait\VerticalScaleAttribute;

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