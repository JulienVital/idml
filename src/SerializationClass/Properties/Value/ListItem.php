<?php
namespace Jvital\Idml\SerializationClass\Properties\Value;
use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\Trait\TypeAttribute;
use Jvital\Idml\SerializationClass\Trait\Value;

/** 
 * @XmlRoot("ListItem") 
*/
class ListItem
{

    use TypeAttribute;
    use Value;

}
