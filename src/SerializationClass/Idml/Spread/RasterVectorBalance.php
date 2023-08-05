<?php
namespace Jvital\Idml\SerializationClass\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Trait\TypeAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\Value;

/** 
 * @XmlRoot("RasterVectorBalance") 
*/
class RasterVectorBalance
{

    use TypeAttribute;
    use Value;

}
