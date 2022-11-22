<?php
namespace Jvital\Idml\Properties;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\Trait\AppliedFontValue;
use Jvital\Idml\Trait\BasedOnValue;
use Jvital\Idml\Trait\Label;
use Jvital\Idml\Trait\LeadingValue;
use Jvital\Idml\Trait\ParagraphBorderColorValue;
use Jvital\Idml\Trait\ParagraphBorderTypeValue;
use Jvital\Idml\Trait\RasterVectorBalance;

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
}
