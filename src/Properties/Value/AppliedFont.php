<?php
namespace Jvital\Idml\Properties\Value;
use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\Trait\TypeAttribute;
use Jvital\Idml\Trait\Value;

/** 
 * @XmlRoot("AppliedFont") 
*/
class AppliedFont
{

    use TypeAttribute;
    use Value;

}
