<?php
namespace Jvital\Idml\Stories\Table;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
use Jvital\Idml\Trait\AppliedCellStyleAttribute;
use Jvital\Idml\Trait\ColumnSpanAttribute;
use Jvital\Idml\Trait\NameAttribute;
use Jvital\Idml\Trait\RowSpanAttribute;
use Jvital\Idml\Trait\SelfAttribute;
use Jvital\Idml\Trait\TextCellInsetAttribute;
use Jvital\Idml\Trait\TextTypeCellAttribute;
use Jvital\Idml\XML\BackingStory\XmlElement;

/** 
 * @XmlRoot("Cell") 
*/
class Cell
{

    use SelfAttribute;
    use NameAttribute;
    use RowSpanAttribute;
    use ColumnSpanAttribute;
    use TextTypeCellAttribute;
    use TextCellInsetAttribute;
    use AppliedCellStyleAttribute;
    /**
     * @var XmlElement
     * @SerializedName("XMLElement")
     */
    private XmlElement $xmlElement;

    // /**
    //  * @XmlAttribute
    //  * @SerializedName("Self")
    //  */
    // private string $id;

    // /**
    //  * @XmlAttribute
    //  * @SerializedName("AppliedTOCStyle")
    //  */
    // private string $appliedTOCStyle ='n';

    // /**
    //  * @XmlAttribute
    //  * @SerializedName("UserText")
    //  */
    // private string $userText ='true';

    // /**
    //  * @XmlAttribute
    //  * @SerializedName("IsEndnoteStory")
    //  */
    // private string $isEndnoteStory ='false';

    // /**
    //  * @XmlAttribute
    //  * @SerializedName("TrackChanges")
    //  */
    // private string $trackChanges ='false';

    // /**
    //  * @XmlAttribute
    //  * @SerializedName("StoryTitle")
    //  */
    // private string $storyTitle = '$ID/';

    // /**
    //  * @XmlAttribute
    //  * @SerializedName("AppliedNamedGrid")
    //  */
    // private string $appliedNamedGrid ='n';

    // /**
    //  * @SerializedName("ParagraphStyleRange")
    //  */
    // private ParagraphStyleRange $paragraphStyleRange;

    // /**
    //  * @var XmlElement
    //  * @SerializedName("XMLElement")
    //  */
    // private XmlElement $xmlElement;


}
