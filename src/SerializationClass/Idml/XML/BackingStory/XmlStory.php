<?php
namespace Jvital\Idml\SerializationClass\Idml\XML\BackingStory;

use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\Idml\Stories\ParagraphStyleRange;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/** 
 * @XmlRoot("XmlStory") 
 */
class XmlStory
{
    /**
     * @XmlAttribute
     * @SerializedName("Self")
     */
    private string $id;

    /**
     * @XmlAttribute
     * @SerializedName("AppliedTOCStyle")
     */
    private string $appliedTOCStyle ='n';

    /**
     * @XmlAttribute
     * @SerializedName("UserText")
     */
    private string $userText ='true';

    /**
     * @XmlAttribute
     * @SerializedName("IsEndnoteStory")
     */
    private string $isEndnoteStory ='false';

    /**
     * @XmlAttribute
     * @SerializedName("TrackChanges")
     */
    private string $trackChanges ='false';

    /**
     * @XmlAttribute
     * @SerializedName("StoryTitle")
     */
    private string $storyTitle = '$ID/';

    /**
     * @XmlAttribute
     * @SerializedName("AppliedNamedGrid")
     */
    private string $appliedNamedGrid ='n';

    /**
     * @SerializedName("ParagraphStyleRange")
     */
    private ParagraphStyleRange $paragraphStyleRange;


    /**
     * Get the value of paragraphStyleRange
     */
    public function getParagraphStyleRange(): ParagraphStyleRange
    {
        return $this->paragraphStyleRange;
    }

    /**
     * Set the value of paragraphStyleRange
     */
    public function setParagraphStyleRange(ParagraphStyleRange $paragraphStyleRange): self
    {
        $this->paragraphStyleRange = $paragraphStyleRange;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }
}
