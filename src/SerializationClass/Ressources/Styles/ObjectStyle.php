<?php
namespace Jvital\Idml\SerializationClass\Ressources\Styles;
use JMS\Serializer\Annotation\XmlRoot;
use Jvital\Idml\SerializationClass\Trait\AppliedParagraphStyleAttribute;
use Jvital\Idml\SerializationClass\Trait\BottomLeftCornerOptionAttribute;
use Jvital\Idml\SerializationClass\Trait\BottomLeftCornerRadiusAttribute;
use Jvital\Idml\SerializationClass\Trait\BottomRightCornerOptionAttribute;
use Jvital\Idml\SerializationClass\Trait\BottomRightCornerRadiusAttribute;
use Jvital\Idml\SerializationClass\Trait\CornerOptionAttribute;
use Jvital\Idml\SerializationClass\Trait\CornerRadiusAttribute;
use Jvital\Idml\SerializationClass\Trait\EndCapAttribute;
use Jvital\Idml\SerializationClass\Trait\EndJoinAttribute;
use Jvital\Idml\SerializationClass\Trait\FillColorAttribute;
use Jvital\Idml\SerializationClass\Trait\LeftLineEndAttribute;
use Jvital\Idml\SerializationClass\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Trait\RightLineEndAttribute;
use Jvital\Idml\SerializationClass\Trait\SelfAttribute;
use Jvital\Idml\SerializationClass\Trait\StrokeTypeAttribute;
use Jvital\Idml\SerializationClass\Trait\StrokeWeightAttribute;
use Jvital\Idml\SerializationClass\Trait\TopLeftCornerOptionAttribute;
use Jvital\Idml\SerializationClass\Trait\TopLeftCornerRadiusAttribute;
use Jvital\Idml\SerializationClass\Trait\TopRightCornerOptionAttribute;
use Jvital\Idml\SerializationClass\Trait\TopRightCornerRadiusAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Spread\TextFramePreference;

/** 
 * @XmlRoot("ObjectStyle") 
*/
class ObjectStyle{

    use SelfAttribute;
    use NameAttribute;
    use AppliedParagraphStyleAttribute;
    use CornerRadiusAttribute;
    use FillColorAttribute;
    use StrokeWeightAttribute;
    use EndCapAttribute;
    use EndJoinAttribute;
    use StrokeTypeAttribute;
    use LeftLineEndAttribute;
    use RightLineEndAttribute;
    use TopLeftCornerOptionAttribute;
    use TopRightCornerOptionAttribute;
    use BottomLeftCornerOptionAttribute;
    use BottomRightCornerOptionAttribute;
    use TopLeftCornerRadiusAttribute;
    use TopRightCornerRadiusAttribute;
    use BottomLeftCornerRadiusAttribute;
    use BottomRightCornerRadiusAttribute;
    use CornerOptionAttribute;

    /**
     * @SerializedName("TransformAttributeOption")
     */
    private TransformAttributeOption $transformAttributeOption;

    /**
     * @SerializedName("RootParagraphStyleGroup")
     */
    private RootParagraphStyleGroup $rootParagraphStyleGroup;

    /**
     * @SerializedName("TextFramePreference")
     */
    private TextFramePreference $textFramePreference;

    /**
     * @SerializedName("BaselineFrameGridOption")
     */
    private BaselineFrameGridOption $baselineFrameGridOption;

    /**
     * @SerializedName("AnchoredObjectSetting")
     */
    private AnchoredObjectSetting $anchoredObjectSetting;

    /**
     * @SerializedName("TextWrapPreference")
     */
    private TextWrapPreference $textWrapPreference;
    
    /**
     * @SerializedName("StoryPreference")
     */
    private StoryPreference $storyPreference;

    /**
     * @SerializedName("FrameFittingOption")
     */
    private FrameFittingOption $frameFittingOption;

    /**
     * @SerializedName("TextFrameFootnoteOptionsObject")
     */
    private TextFrameFootnoteOptionsObject $TextFrameFootnoteOptionsObject;

    /**
     * Get the value of transformAttributeOption
     */
    public function getTransformAttributeOption(): TransformAttributeOption
    {
        return $this->transformAttributeOption;
    }

    /**
     * Set the value of transformAttributeOption
     */
    public function setTransformAttributeOption(TransformAttributeOption $transformAttributeOption): self
    {
        $this->transformAttributeOption = $transformAttributeOption;

        return $this;
    }

    /**
     * Get the value of textFramePreference
     */
    public function getTextFramePreference(): TextFramePreference
    {
        return $this->textFramePreference;
    }

    /**
     * Set the value of textFramePreference
     */
    public function setTextFramePreference(TextFramePreference $textFramePreference): self
    {
        $this->textFramePreference = $textFramePreference;

        return $this;
    }

    /**
     * Get the value of frameFittingOption
     */
    public function getFrameFittingOption(): FrameFittingOption
    {
        return $this->frameFittingOption;
    }

    /**
     * Set the value of frameFittingOption
     */
    public function setFrameFittingOption(FrameFittingOption $frameFittingOption): self
    {
        $this->frameFittingOption = $frameFittingOption;

        return $this;
    }
}