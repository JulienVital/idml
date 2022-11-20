<?php
namespace Jvital\Idml\Ressources\Styles;
use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\Trait\ImportedAttribute;
use Jvital\Idml\Trait\NameAttribute;
use Jvital\Idml\Trait\NextStyleAttribute;
use Jvital\Idml\Trait\Properties;
use Jvital\Idml\Trait\SelfAttribute;

/** 
 * @XmlRoot("ParagraphStyle") 
*/
class ParagraphStyle{

    use SelfAttribute;
    use NameAttribute;
    use ImportedAttribute;
    use NextStyleAttribute;
    use Properties;
}