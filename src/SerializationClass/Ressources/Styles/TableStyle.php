<?php
namespace Jvital\Idml\SerializationClass\Ressources\Styles;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Trait\Properties;

/** 
 * @XmlRoot("TableStyle") 
*/
class TableStyle
{
    use Properties;
    /**
     * @XmlAttribute
     * @SerializedName("Self")
     */
    private string $self;

    /**
     * @XmlAttribute
     * @SerializedName("GraphicLeftInset")
     */
    private int $graphicLeftInset;

    /**
     * @XmlAttribute
     * @SerializedName("GraphicTopInset")
     */
    private int $graphicTopInset;

    /**
     * @XmlAttribute
     * @SerializedName("GraphicRightInset")
     */
    private int $graphicRightInset;

    /**
     * @XmlAttribute
     * @SerializedName("GraphicBottomInset")
     */
    private int $graphicBottomInset;

    /**
     * @XmlAttribute
     * @SerializedName("ClipContentToGraphicCell")
     */
    private bool $clipContentToGraphicCell;

    /**
     * @XmlAttribute
     * @SerializedName("TextTopInset")
     */
    private int $textTopInset;

    /**
     * @XmlAttribute
     * @SerializedName("TextLeftInset")
     */
    private int $textLeftInset;

    /**
     * @XmlAttribute
     * @SerializedName("TextBottomInset")
     */
    private int $textBottomInset;

    /**
     * @XmlAttribute
     * @SerializedName("TextRightInset")
     */
    private int $textRightInset;

    /**
     * @XmlAttribute
     * @SerializedName("ClipContentToTextCell")
     */
    private bool $clipContentToTextCell;

    /**
     * @XmlAttribute
     * @SerializedName("Name")
     */
    private string $name;

    /**
     * @XmlAttribute
     * @SerializedName("StrokeOrder")
     */
    private string $strokeOrder;

    /**
     * @XmlAttribute
     * @SerializedName("TopBorderStrokeWeight")
     */
    private int $topBorderStrokeWeight;

    /**
     * @XmlAttribute
     * @SerializedName("TopBorderStrokeTint")
     */
    private int $topBorderStrokeTint;

    /**
     * @XmlAttribute
     * @SerializedName("TopBorderStrokeGapTint")
     */
    private int $topBorderStrokeGapTint;

    /**
     * @XmlAttribute
     * @SerializedName("LeftBorderStrokeWeight")
     */
    private int $leftBorderStrokeWeight;

    /**
     * @XmlAttribute
     * @SerializedName("TopBorderStrokeType")
     */
    private string $topBorderStrokeType;

    /**
     * @XmlAttribute
     * @SerializedName("TopBorderStrokeColor")
     */
    private string $topBorderStrokeColor;

    /**
     * @XmlAttribute
     * @SerializedName("TopBorderStrokeGapColor")
     */
    private string $topBorderStrokeGapColor;

    /**
     * @XmlAttribute
     * @SerializedName("TopBorderStrokeOverprint")
     */
    private bool $topBorderStrokeOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("TopBorderStrokeGapOverprint")
     */
    private bool $topBorderStrokeGapOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("LeftBorderStrokeOverprint")
     */
    private bool $leftBorderStrokeOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("LeftBorderStrokeGapOverprint")
     */
    private bool $leftBorderStrokeGapOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("LeftBorderStrokeType")
     */
    private string $leftBorderStrokeType;
    /**
     * @XmlAttribute
     * @SerializedName("LeftBorderStrokeGapColor")
     */
    private string $leftBorderStrokeGapColor;
    /**
     * @XmlAttribute
     * @SerializedName("LeftBorderStrokeColor")
     */
    private string $leftBorderStrokeColor;

    /**
     * @XmlAttribute
     * @SerializedName("LeftBorderStrokeTint")
     */
    private int $leftBorderStrokeTint;
    /**
     * @XmlAttribute
     * @SerializedName("LeftBorderStrokeGapTint")
     */
    private int $leftBorderStrokeGapTint;
    /**
     * @XmlAttribute
     * @SerializedName("BottomBorderStrokeWeight")
     */
    private int $bottomBorderStrokeWeight;
// 
// BottomBorderStrokeGapTint="100"
// BottomBorderStrokeTint="100"
// BottomBorderStrokeType="StrokeStyle/$ID/Solid"
// BottomBorderStrokeColor="Color/Black"
// BottomBorderStrokeGapColor="Color/Paper"
// BottomBorderStrokeOverprint="false"
// BottomBorderStrokeGapOverprint="false"
// RightBorderStrokeWeight="1"
// RightBorderStrokeType="StrokeStyle/$ID/Solid"
// RightBorderStrokeColor="Color/Black"
// RightBorderStrokeTint="100"
// RightBorderStrokeOverprint="false"
// RightBorderStrokeGapColor="Color/Paper"
// RightBorderStrokeGapTint="100"
// RightBorderStrokeGapOverprint="false"
// SpaceBefore="4"
// SpaceAfter="-4"
// SkipFirstAlternatingStrokeRows="0"
// SkipLastAlternatingStrokeRows="0"
// StartRowStrokeCount="0"
// StartRowStrokeColor="Color/Black"
// StartRowStrokeWeight="1"
// StartRowStrokeType="StrokeStyle/$ID/Solid"
// StartRowStrokeTint="100"
// StartRowStrokeGapOverprint="false"
// StartRowStrokeGapColor="Color/Paper"
// StartRowStrokeGapTint="100"
// StartRowStrokeOverprint="false"
// EndRowStrokeCount="0"
// EndRowStrokeColor="Color/Black"
// EndRowStrokeWeight="0.25"
// EndRowStrokeType="StrokeStyle/$ID/Solid"
// EndRowStrokeTint="100"
// EndRowStrokeOverprint="false"
// EndRowStrokeGapColor="Color/Paper"
// EndRowStrokeGapTint="100"
// EndRowStrokeGapOverprint="false"
// SkipFirstAlternatingStrokeColumns="0"
// SkipLastAlternatingStrokeColumns="0"
// StartColumnStrokeCount="0"
// StartColumnStrokeColor="Color/Black"
// StartColumnStrokeWeight="1"
// StartColumnStrokeType="StrokeStyle/$ID/Solid"
// StartColumnStrokeTint="100"
// StartColumnStrokeOverprint="false"
// StartColumnStrokeGapColor="Color/Paper"
// StartColumnStrokeGapTint="100"
// StartColumnStrokeGapOverprint="false"
// EndColumnStrokeCount="0"
// EndColumnStrokeColor="Color/Black"
// EndColumnStrokeWeight="0.25"
// EndColumnLineStyle="StrokeStyle/$ID/Solid"
// EndColumnStrokeTint="100"
// EndColumnStrokeOverprint="false"
// EndColumnStrokeGapColor="Color/Paper"
// EndColumnStrokeGapTint="100"
// EndColumnStrokeGapOverprint="false"
// ColumnFillsPriority="false"
// SkipFirstAlternatingFillRows="0"
// SkipLastAlternatingFillRows="0"
// StartRowFillColor="Color/Black"
// StartRowFillCount="0"
// StartRowFillTint="20"
// StartRowFillOverprint="false"
// EndRowFillCount="0"
// EndRowFillColor="Swatch/None"
// EndRowFillTint="100"
// EndRowFillOverprint="false"
// SkipFirstAlternatingFillColumns="0"
// SkipLastAlternatingFillColumns="0"
// StartColumnFillCount="0"
// StartColumnFillColor="Color/Black"
// StartColumnFillTint="20"
// StartColumnFillOverprint="false"
// EndColumnFillCount="0"
// EndColumnFillColor="Swatch/None"
// EndColumnFillTint="100"
// EndColumnFillOverprint="false"
// HeaderRegionSameAsBodyRegion="true"
// FooterRegionSameAsBodyRegion="true"
// LeftColumnRegionSameAsBodyRegion="true"
// RightColumnRegionSameAsBodyRegion="true"
// HeaderRegionCellStyle="n"
// FooterRegionCellStyle="n"
// LeftColumnRegionCellStyle="n"
// RightColumnRegionCellStyle="n"
// BodyRegionCellStyle="CellStyle/$ID/[None]"
//     />

}
