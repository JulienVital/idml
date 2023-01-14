<?php
namespace Jvital\Idml\SerializationClass\Ressources\Styles;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Trait\Properties;

/** 
 * @XmlRoot("BaselineFrameGridOption") 
*/
class BaselineFrameGridOption
{
    use Properties;

    /**
     * @XmlAttribute
     * @SerializedName("UseCustomBaselineFrameGrid")
     */
    private bool $useCustomBaselineFrameGrid;

    /**
     * @XmlAttribute
     * @SerializedName("StartingOffsetForBaselineFrameGrid")
     */
    private int $startingOffsetForBaselineFrameGrid;

    /**
     * @XmlAttribute
     * @SerializedName("BaselineFrameGridRelativeOption")
     */
    private string $baselineFrameGridRelativeOption;

    /**
     * @XmlAttribute
     * @SerializedName("BaselineFrameGridIncrement")
     */
    private int $baselineFrameGridIncrement;

}
