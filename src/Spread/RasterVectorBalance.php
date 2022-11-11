<?php
namespace Jvital\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Trait\TypeAttribute;
use Jvital\Idml\Trait\Value;

/** 
 * @XmlRoot("RasterVectorBalance") 
*/
class RasterVectorBalance
{

    use TypeAttribute;
    use Value;

}
