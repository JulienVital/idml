<?php
namespace Jvital\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\Trait\SelfAttribute;


/** 
 * @XmlRoot("Spread") 
*/
class Page
{
    use SelfAttribute;

    function __construct($self){
        $this->self = $self;
    }

}
