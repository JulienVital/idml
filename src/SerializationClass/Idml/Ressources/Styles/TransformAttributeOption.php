<?php
namespace Jvital\Idml\SerializationClass\Idml\Ressources\Styles;
use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\Idml\Trait\TransformAttrLeftReferenceAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\TransformAttrRefAnchorPointAttribute;
use Jvital\Idml\SerializationClass\Idml\Trait\TransformAttrTopReferenceAttribute;

/** 
 * @XmlRoot("TransformAttributeOption") 
 */
class TransformAttributeOption
{
    use TransformAttrLeftReferenceAttribute;

    use TransformAttrTopReferenceAttribute;

    use TransformAttrRefAnchorPointAttribute;
}