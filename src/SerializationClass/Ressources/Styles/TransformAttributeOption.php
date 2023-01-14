<?php
namespace Jvital\Idml\SerializationClass\Ressources\Styles;
use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\Trait\TransformAttrLeftReferenceAttribute;
use Jvital\Idml\SerializationClass\Trait\TransformAttrRefAnchorPointAttribute;
use Jvital\Idml\SerializationClass\Trait\TransformAttrTopReferenceAttribute;

/** 
 * @XmlRoot("TransformAttributeOption") 
*/
class TransformAttributeOption {
    use TransformAttrLeftReferenceAttribute;

    use TransformAttrTopReferenceAttribute;

    use TransformAttrRefAnchorPointAttribute;
}