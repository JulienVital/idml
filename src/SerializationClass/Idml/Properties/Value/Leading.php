<?php
namespace Jvital\Idml\SerializationClass\Idml\Properties\Value;
use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\Trait\TypeAttribute;
use Jvital\Idml\SerializationClass\Trait\Value;

/** 
 * @XmlRoot("Leading") 
*/
class Leading
{

    use TypeAttribute;
    use Value;

}
