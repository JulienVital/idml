<?php
namespace Jvital\Idml\SerializationClass\Ressources\Styles;
use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\Trait\AppliedParagraphStyleAttribute;
use Jvital\Idml\SerializationClass\Trait\CornerRadiusAttribute;
use Jvital\Idml\SerializationClass\Trait\EndCapAttribute;
use Jvital\Idml\SerializationClass\Trait\EndJoinAttribute;
use Jvital\Idml\SerializationClass\Trait\FillColorAttribute;
use Jvital\Idml\SerializationClass\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Trait\SelfAttribute;
use Jvital\Idml\SerializationClass\Trait\StrokeTypeAttribute;
use Jvital\Idml\SerializationClass\Trait\StrokeWeightAttribute;

/** 
 * @XmlRoot("ObjectStyle") 
*/
class ObjectStyle{

    use SelfAttribute;
    use NameAttribute;
    use AppliedParagraphStyleAttribute;
    use CornerRadiusAttribute;
    use FillColorAttribute;
    use StrokeWeightAttribute;
    use EndCapAttribute;
    use EndJoinAttribute;
    use StrokeTypeAttribute;
}