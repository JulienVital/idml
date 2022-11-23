<?php
namespace Jvital\Idml\SerializationClass\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;



/** 
 * @XmlRoot("TextFramePreference") 
*/
class TextFramePreference
{

    /**
     * @XmlAttribute
     * @SerializedName("TextColumnCount")
     */
    private string $textColumnCount;

    /**
     * @XmlAttribute
     * @SerializedName("TextColumnFixedWidth")
     */
    private string $textColumnFixedWidth;
    
    /**
     * @XmlAttribute
     * @SerializedName("VerticalJustification")
     */
    private string $verticalJustification;
    
    /**
     * @XmlAttribute
     * @SerializedName("TextColumnMaxWidth")
     */
    private string $textColumnMaxWidth;
    
    /**
     * @XmlAttribute
     * @SerializedName("AutoSizingType")
     */
    private string $autoSizingType;
    
    /**
     * @XmlAttribute
     * @SerializedName("AutoSizingReferencePoint")
     */
    private string $autoSizingReferencePoint;

    /**
     * Get the value of textColumnCount
     */
    public function getTextColumnCount(): string
    {
        return $this->textColumnCount;
    }

    /**
     * Set the value of textColumnCount
     */
    public function setTextColumnCount(string $textColumnCount): self
    {
        $this->textColumnCount = $textColumnCount;

        return $this;
    }

    /**
     * Get the value of autoSizingReferencePoint
     */
    public function getAutoSizingReferencePoint(): string
    {
        return $this->autoSizingReferencePoint;
    }

    /**
     * Set the value of autoSizingReferencePoint
     */
    public function setAutoSizingReferencePoint(string $autoSizingReferencePoint): self
    {
        $this->autoSizingReferencePoint = $autoSizingReferencePoint;

        return $this;
    }

    /**
     * Get the value of textColumnFixedWidth
     */
    public function getTextColumnFixedWidth(): string
    {
        return $this->textColumnFixedWidth;
    }

    /**
     * Set the value of textColumnFixedWidth
     */
    public function setTextColumnFixedWidth(string $textColumnFixedWidth): self
    {
        $this->textColumnFixedWidth = $textColumnFixedWidth;

        return $this;
    }

    /**
     * Get the value of verticalJustification
     */
    public function getVerticalJustification(): string
    {
        return $this->verticalJustification;
    }

    /**
     * Set the value of verticalJustification
     */
    public function setVerticalJustification(string $verticalJustification): self
    {
        $this->verticalJustification = $verticalJustification;

        return $this;
    }

    /**
     * Get the value of textColumnMaxWidth
     */
    public function getTextColumnMaxWidth(): string
    {
        return $this->textColumnMaxWidth;
    }

    /**
     * Set the value of textColumnMaxWidth
     */
    public function setTextColumnMaxWidth(string $textColumnMaxWidth): self
    {
        $this->textColumnMaxWidth = $textColumnMaxWidth;

        return $this;
    }

    /**
     * Get the value of autoSizingType
     */
    public function getAutoSizingType(): string
    {
        return $this->autoSizingType;
    }

    /**
     * Set the value of autoSizingType
     */
    public function setAutoSizingType(string $autoSizingType): self
    {
        $this->autoSizingType = $autoSizingType;

        return $this;
    }
}
