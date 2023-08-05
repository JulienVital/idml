<?php
namespace Jvital\Idml\SerializationClass\Idml\Ressources\Styles;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Trait\Properties;

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

    /**
     * @XmlAttribute
     * @SerializedName("BottomBorderStrokeGapTint")
     */
    private int $bottomBorderStrokeGapTint;

    
    /**
     * @XmlAttribute
     * @SerializedName("BottomBorderStrokeTint")
     */
    private int $bottomBorderStrokeTint;

    /**
     * @XmlAttribute
     * @SerializedName("BottomBorderStrokeType")
     */
    private string $bottomBorderStrokeType;

    /**
     * @XmlAttribute
     * @SerializedName("BottomBorderStrokeColor")
     */
    private string $bottomBorderStrokeColor;

    /**
     * @XmlAttribute
     * @SerializedName("BottomBorderStrokeGapColor")
     */
    private string $bottomBorderStrokeGapColor;

    /**
     * @XmlAttribute
     * @SerializedName("BottomBorderStrokeOverprint")
     */
    private bool $bottomBorderStrokeOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("BottomBorderStrokeGapOverprint")
     */
    private bool $bottomBorderStrokeGapOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("RightBorderStrokeWeight")
     */
    private int $rightBorderStrokeWeight;

    /**
     * @XmlAttribute
     * @SerializedName("RightBorderStrokeType")
     */
    private string $rightBorderStrokeType;

    /**
     * @XmlAttribute
     * @SerializedName("RightBorderStrokeColor")
     */
    private string $rightBorderStrokeColor;

    /**
     * @XmlAttribute
     * @SerializedName("RightBorderStrokeTint")
     */
    private int $RightBorderStrokeTint;

    /**
     * @XmlAttribute
     * @SerializedName("RightBorderStrokeOverprint")
     */
    private bool $RightBorderStrokeOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("RightBorderStrokeGapColor")
     */
    private string $RightBorderStrokeGapColor;

    /**
     * @XmlAttribute
     * @SerializedName("RightBorderStrokeGapTint")
     */
    private int $RightBorderStrokeGapTint;

    /**
     * @XmlAttribute
     * @SerializedName("RightBorderStrokeGapOverprint")
     */
    private bool $RightBorderStrokeGapOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("SpaceBefore")
     */
    private int $SpaceBefore;

    /**
     * @XmlAttribute
     * @SerializedName("SpaceAfter")
     */
    private int $SpaceAfter;

    /**
     * @XmlAttribute
     * @SerializedName("SkipFirstAlternatingStrokeRows")
     */
    private int $SkipFirstAlternatingStrokeRows;

    /**
     * @XmlAttribute
     * @SerializedName("SkipLastAlternatingStrokeRows")
     */
    private int $SkipLastAlternatingStrokeRows;

    /**
     * @XmlAttribute
     * @SerializedName("StartRowStrokeCount")
     */
    private int $StartRowStrokeCount;

    /**
     * @XmlAttribute
     * @SerializedName("StartRowStrokeColor")
     */
    private string $StartRowStrokeColor;

    /**
     * @XmlAttribute
     * @SerializedName("StartRowStrokeWeight")
     */
    private int $StartRowStrokeWeight;

    /**
     * @XmlAttribute
     * @SerializedName("StartRowStrokeType")
     */
    private string $StartRowStrokeType;

    /**
     * @XmlAttribute
     * @SerializedName("StartRowStrokeTint")
     */
    private int $StartRowStrokeTint;

    /**
     * @XmlAttribute
     * @SerializedName("StartRowStrokeGapOverprint")
     */
    private bool $StartRowStrokeGapOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("StartRowStrokeGapColor")
     */
    private string $StartRowStrokeGapColor;

    /**
     * @XmlAttribute
     * @SerializedName("StartRowStrokeGapTint")
     */
    private int $StartRowStrokeGapTint;

    /**
     * @XmlAttribute
     * @SerializedName("StartRowStrokeOverprint")
     */
    private bool $StartRowStrokeOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("EndRowStrokeCount")
     */
    private int $EndRowStrokeCount;

    /**
     * @XmlAttribute
     * @SerializedName("EndRowStrokeColor")
     */
    private string $EndRowStrokeColor;

    /**
     * @XmlAttribute
     * @SerializedName("EndRowStrokeWeight")
     */
    private float $EndRowStrokeWeight;

    /**
     * @XmlAttribute
     * @SerializedName("EndRowStrokeType")
     */
    private string $EndRowStrokeType;

    /**
     * @XmlAttribute
     * @SerializedName("EndRowStrokeTint")
     */
    private int $EndRowStrokeTint;
    /**
     * @XmlAttribute
     * @SerializedName("EndRowStrokeOverprint")
     */
    private bool $EndRowStrokeOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("EndRowStrokeGapColor")
     */
    private string $EndRowStrokeGapColor;

    /**
     * @XmlAttribute
     * @SerializedName("EndRowStrokeGapTint")
     */
    private int $EndRowStrokeGapTint;

    /**
     * @XmlAttribute
     * @SerializedName("EndRowStrokeGapOverprint")
     */
    private bool $EndRowStrokeGapOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("SkipFirstAlternatingStrokeColumns")
     */
    private int $SkipFirstAlternatingStrokeColumns;

    /**
     * @XmlAttribute
     * @SerializedName("SkipLastAlternatingStrokeColumns")
     */
    private int $SkipLastAlternatingStrokeColumns;

    /**
     * @XmlAttribute
     * @SerializedName("StartColumnStrokeCount")
     */
    private int $StartColumnStrokeCount;

    /**
     * @XmlAttribute
     * @SerializedName("StartColumnStrokeWeight")
     */
    private int $StartColumnStrokeWeight;

    /**
     * @XmlAttribute
     * @SerializedName("StartColumnStrokeTint")
     */
    private int $StartColumnStrokeTint;

    /**
     * @XmlAttribute
     * @SerializedName("StartColumnStrokeGapTint")
     */
    private int $StartColumnStrokeGapTint;

    /**
     * @XmlAttribute
     * @SerializedName("StartColumnStrokeGapOverprint")
     */
    private bool $StartColumnStrokeGapOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("StartColumnStrokeOverprint")
     */
    private bool $StartColumnStrokeOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("StartColumnStrokeColor")
     */
    private string $StartColumnStrokeColor;

    /**
     * @XmlAttribute
     * @SerializedName("StartColumnStrokeType")
     */
    private string $StartColumnStrokeType;

    /**
     * @XmlAttribute
     * @SerializedName("StartColumnStrokeGapColor")
     */
    private string $StartColumnStrokeGapColor;

    /**
     * @XmlAttribute
     * @SerializedName("EndColumnStrokeCount")
     */
    private int $EndColumnStrokeCount;

    /**
     * @XmlAttribute
     * @SerializedName("EndColumnStrokeWeight")
     */
    private float $EndColumnStrokeWeight;

    /**
     * @XmlAttribute
     * @SerializedName("EndColumnStrokeTint")
     */
    private int $EndColumnStrokeTint;

    /**
     * @XmlAttribute
     * @SerializedName("EndColumnStrokeGapTint")
     */
    private int $EndColumnStrokeGapTint;

    /**
     * @XmlAttribute
     * @SerializedName("EndColumnStrokeGapOverprint")
     */
    private bool $EndColumnStrokeGapOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("EndColumnStrokeOverprint")
     */
    private bool $EndColumnStrokeOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("EndColumnStrokeColor")
     */
    private string $EndColumnStrokeColor;

    /**
     * @XmlAttribute
     * @SerializedName("EndColumnLineStyle")
     */
    private string $EndColumnLineStyle;

    /**
     * @XmlAttribute
     * @SerializedName("EndColumnStrokeGapColor")
     */
    private string $EndColumnStrokeGapColor;

    /**
     * @XmlAttribute
     * @SerializedName("ColumnFillsPriority")
     */
    private bool $ColumnFillsPriority;

    /**
     * @XmlAttribute
     * @SerializedName("SkipFirstAlternatingFillRows")
     */
    private int $SkipFirstAlternatingFillRows;

    /**
     * @XmlAttribute
     * @SerializedName("SkipLastAlternatingFillRows")
     */
    private int $SkipLastAlternatingFillRows;


    /**
     * @XmlAttribute
     * @SerializedName("StartRowFillColor")
     */
    private string $StartRowFillColor;

    /**
     * @XmlAttribute
     * @SerializedName("StartRowFillCount")
     */
    private int $StartRowFillCount;

    /**
     * @XmlAttribute
     * @SerializedName("StartRowFillTint")
     */
    private int $StartRowFillTint;

    /**
     * @XmlAttribute
     * @SerializedName("StartRowFillOverprint")
     */
    private bool $StartRowFillOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("EndRowFillCount")
     */
    private int $EndRowFillCount;

    /**
     * @XmlAttribute
     * @SerializedName("EndRowFillColor")
     */
    private string $EndRowFillColor;
    
    /**
     * @XmlAttribute
     * @SerializedName("EndRowFillTint")
     */
    private int $EndRowFillTint;

    /**
     * @XmlAttribute
     * @SerializedName("EndRowFillOverprint")
     */
    private bool $EndRowFillOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("SkipFirstAlternatingFillColumns")
     */
    private int $SkipFirstAlternatingFillColumns;

    /**
     * @XmlAttribute
     * @SerializedName("SkipLastAlternatingFillColumns")
     */
    private int $SkipLastAlternatingFillColumns;

    /**
     * @XmlAttribute
     * @SerializedName("StartColumnFillCount")
     */
    private int $StartColumnFillCount;

    /**
     * @XmlAttribute
     * @SerializedName("StartColumnFillColor")
     */
    private string $StartColumnFillColor;

    /**
     * @XmlAttribute
     * @SerializedName("StartColumnFillTint")
     */
    private int $StartColumnFillTint;

    /**
     * @XmlAttribute
     * @SerializedName("StartColumnFillOverprint")
     */
    private bool $StartColumnFillOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("EndColumnFillCount")
     */
    private int $EndColumnFillCount;

    /**
     * @XmlAttribute
     * @SerializedName("EndColumnFillColor")
     */
    private string $EndColumnFillColor;

    /**
     * @XmlAttribute
     * @SerializedName("EndColumnFillTint")
     */
    private int $EndColumnFillTint;

    /**
     * @XmlAttribute
     * @SerializedName("EndColumnFillOverprint")
     */
    private bool $EndColumnFillOverprint;

    /**
     * @XmlAttribute
     * @SerializedName("HeaderRegionSameAsBodyRegion")
     */
    private bool $HeaderRegionSameAsBodyRegion;

    /**
     * @XmlAttribute
     * @SerializedName("FooterRegionSameAsBodyRegion")
     */
    private bool $FooterRegionSameAsBodyRegion;

    /**
     * @XmlAttribute
     * @SerializedName("LeftColumnRegionSameAsBodyRegion")
     */
    private bool $LeftColumnRegionSameAsBodyRegion;

    /**
     * @XmlAttribute
     * @SerializedName("RightColumnRegionSameAsBodyRegion")
     */
    private bool $RightColumnRegionSameAsBodyRegion;

        /**
     * @XmlAttribute
     * @SerializedName("HeaderRegionCellStyle")
     */
    private string $HeaderRegionCellStyle;

        /**
     * @XmlAttribute
     * @SerializedName("FooterRegionCellStyle")
     */
    private string $FooterRegionCellStyle;

    /**
     * @XmlAttribute
     * @SerializedName("LeftColumnRegionCellStyle")
     */
    private string $LeftColumnRegionCellStyle;

    /**
     * @XmlAttribute
     * @SerializedName("RightColumnRegionCellStyle")
     */
    private string $RightColumnRegionCellStyle;

    /**
     * @XmlAttribute
     * @SerializedName("BodyRegionCellStyle")
     */
    private string $BodyRegionCellStyle;

}
