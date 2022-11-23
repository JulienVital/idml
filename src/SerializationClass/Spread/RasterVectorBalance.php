<?php
namespace Jvital\Idml\SerializationClass\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Trait\TypeAttribute;
use Jvital\Idml\SerializationClass\Trait\Value;

/** 
 * @XmlRoot("RasterVectorBalance") 
*/
class RasterVectorBalance
{

    use TypeAttribute;
    use Value;

}
