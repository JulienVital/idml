<?php
namespace Jvital\Idml\Properties;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\Trait\Label;
use Jvital\Idml\Trait\RasterVectorBalance;

/** 
 * @XmlRoot("Properties") 
*/
class Properties 
{
    use RasterVectorBalance;
    use Label;
}
