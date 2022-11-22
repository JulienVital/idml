<?php
namespace Jvital\Idml\Properties\Value;
use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\Trait\TypeAttribute;
use Jvital\Idml\Trait\Value;

/** 
 * @XmlRoot("ParagraphBorderType") 
*/
class ParagraphBorderType
{

    use TypeAttribute;
    use Value;

}
