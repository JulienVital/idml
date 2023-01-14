<?php
namespace Jvital\Idml\SerializationClass\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Trait\Properties;

/** 
 * @XmlRoot("TextFramePreference") 
*/
class TextFramePreference
{
    use Properties;
    /**
     * @XmlAttribute
     * @SerializedName("TextColumnCount")
     */
    private string $textColumnCount;

    /**
     * @XmlAttribute
     * @SerializedName("TextColumnGutter")
     */
    private int $textColumnGutter;

    /**
     * @XmlAttribute
     * @SerializedName("TextColumnFixedWidth")
     */
    private string $textColumnFixedWidth;

    /**
     * @XmlAttribute
     * @SerializedName("UseFixedColumnWidth")
     */
    private bool $useFixedColumnWidth;

    /**
     * @XmlAttribute
     * @SerializedName("FirstBaselineOffset")
     */
    private string $firstBaselineOffset;

    /**
     * @XmlAttribute
     * @SerializedName("MinimumFirstBaselineOffset")
     */
    private int $minimumFirstBaselineOffset;

    /**
     * @XmlAttribute
     * @SerializedName("VerticalJustification")
     */
    private string $verticalJustification;

    /**
     * @XmlAttribute
     * @SerializedName("VerticalThreshold")
     */
    private int $verticalThreshold;

    /**
     * @XmlAttribute
     * @SerializedName("IgnoreWrap")
     */
    private bool $ignoreWrap;

    /**
     * @XmlAttribute
     * @SerializedName("UseFlexibleColumnWidth")
     */
    private bool $useFlexibleColumnWidth;

    /**
     * @XmlAttribute
     * @SerializedName("TextColumnMaxWidth")
     */
    private int $textColumnMaxWidth;

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
     * @XmlAttribute
     * @SerializedName("UseMinimumHeightForAutoSizing")
     */
    private bool $useMinimumHeightForAutoSizing;

    /**
     * @XmlAttribute
     * @SerializedName("MinimumHeightForAutoSizing")
     */
    private int $minimumHeightForAutoSizing;

    /**
     * @XmlAttribute
     * @SerializedName("UseMinimumWidthForAutoSizing")
     */
    private bool $useMinimumWidthForAutoSizing;

    /**
     * @XmlAttribute
     * @SerializedName("MinimumWidthForAutoSizing")
     */
    private int $minimumWidthForAutoSizing;

    /**
     * @XmlAttribute
     * @SerializedName("UseNoLineBreaksForAutoSizing")
     */
    private bool $useNoLineBreaksForAutoSizing;

    /**
     * @XmlAttribute
     * @SerializedName("ColumnRuleOverride")
     */
    private bool $columnRuleOverride;

    /**
     * @XmlAttribute
     * @SerializedName("ColumnRuleOffset")
     */
    private int $columnRuleOffset;

    /**
     * @XmlAttribute
     * @SerializedName("ColumnRuleTopInset")
     */
    private int $columnRuleTopInset;

    /**
     * @XmlAttribute
     * @SerializedName("ColumnRuleInsetChainOverride")
     */
    private bool $columnRuleInsetChainOverride;

    /**
     * @XmlAttribute
     * @SerializedName("ColumnRuleBottomInset")
     */
    private int $columnRuleBottomInset;

    /**
     * @XmlAttribute
     * @SerializedName("ColumnRuleStrokeWidth")
     */
    private int $columnRuleStrokeWidth;

    /**
     * @XmlAttribute
     * @SerializedName("ColumnRuleStrokeColor")
     */
    private string $columnRuleStrokeColor;

    /**
     * @XmlAttribute
     * @SerializedName("ColumnRuleStrokeType")
     */
    private string $columnRuleStrokeType;

    /**
     * @XmlAttribute
     * @SerializedName("ColumnRuleStrokeTint")
     */
    private int $columnRuleStrokeTint;

    /**
     * @XmlAttribute
     * @SerializedName("ColumnRuleOverprintOverride")
     */
    private bool $columnRuleOverprintOverride;

    /**
     * @XmlAttribute
     * @SerializedName("FootnotesEnableOverrides")
     */
    private bool $footnotesEnableOverrides;

    /**
     * @XmlAttribute
     * @SerializedName("FootnotesSpanAcrossColumns")
     */
    private bool $footnotesSpanAcrossColumns;

    /**
     * @XmlAttribute
     * @SerializedName("FootnotesMinimumSpacing")
     */
    private int $footnotesMinimumSpacing;

    /**
     * @XmlAttribute
     * @SerializedName("FootnotesSpaceBetween")
     */
    private int $footnotesSpaceBetween;

    /**
     * @XmlAttribute
     * @SerializedName("VerticalBalanceColumns")
     */
    private bool $verticalBalanceColumns;


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
     * Get the value of textColumnGutter
     */
    public function getTextColumnGutter(): int
    {
        return $this->textColumnGutter;
    }

    /**
     * Set the value of textColumnGutter
     */
    public function setTextColumnGutter(int $textColumnGutter): self
    {
        $this->textColumnGutter = $textColumnGutter;

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
     * Get the value of useFixedColumnWidth
     */
    public function isUseFixedColumnWidth(): bool
    {
        return $this->useFixedColumnWidth;
    }

    /**
     * Set the value of useFixedColumnWidth
     */
    public function setUseFixedColumnWidth(bool $useFixedColumnWidth): self
    {
        $this->useFixedColumnWidth = $useFixedColumnWidth;

        return $this;
    }

    /**
     * Get the value of firstBaselineOffset
     */
    public function getFirstBaselineOffset(): string
    {
        return $this->firstBaselineOffset;
    }

    /**
     * Set the value of firstBaselineOffset
     */
    public function setFirstBaselineOffset(string $firstBaselineOffset): self
    {
        $this->firstBaselineOffset = $firstBaselineOffset;

        return $this;
    }

    /**
     * Get the value of minimumFirstBaselineOffset
     */
    public function getMinimumFirstBaselineOffset(): int
    {
        return $this->minimumFirstBaselineOffset;
    }

    /**
     * Set the value of minimumFirstBaselineOffset
     */
    public function setMinimumFirstBaselineOffset(int $minimumFirstBaselineOffset): self
    {
        $this->minimumFirstBaselineOffset = $minimumFirstBaselineOffset;

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
     * Get the value of verticalThreshold
     */
    public function getVerticalThreshold(): int
    {
        return $this->verticalThreshold;
    }

    /**
     * Set the value of verticalThreshold
     */
    public function setVerticalThreshold(int $verticalThreshold): self
    {
        $this->verticalThreshold = $verticalThreshold;

        return $this;
    }

    /**
     * Get the value of ignoreWrap
     */
    public function isIgnoreWrap(): bool
    {
        return $this->ignoreWrap;
    }

    /**
     * Set the value of ignoreWrap
     */
    public function setIgnoreWrap(bool $ignoreWrap): self
    {
        $this->ignoreWrap = $ignoreWrap;

        return $this;
    }

    /**
     * Get the value of useFlexibleColumnWidth
     */
    public function isUseFlexibleColumnWidth(): bool
    {
        return $this->useFlexibleColumnWidth;
    }

    /**
     * Set the value of useFlexibleColumnWidth
     */
    public function setUseFlexibleColumnWidth(bool $useFlexibleColumnWidth): self
    {
        $this->useFlexibleColumnWidth = $useFlexibleColumnWidth;

        return $this;
    }

    /**
     * Get the value of textColumnMaxWidth
     */
    public function getTextColumnMaxWidth(): int
    {
        return $this->textColumnMaxWidth;
    }

    /**
     * Set the value of textColumnMaxWidth
     */
    public function setTextColumnMaxWidth(int $textColumnMaxWidth): self
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
     * Get the value of useMinimumHeightForAutoSizing
     */
    public function isUseMinimumHeightForAutoSizing(): bool
    {
        return $this->useMinimumHeightForAutoSizing;
    }

    /**
     * Set the value of useMinimumHeightForAutoSizing
     */
    public function setUseMinimumHeightForAutoSizing(bool $useMinimumHeightForAutoSizing): self
    {
        $this->useMinimumHeightForAutoSizing = $useMinimumHeightForAutoSizing;

        return $this;
    }

    /**
     * Get the value of minimumHeightForAutoSizing
     */
    public function getMinimumHeightForAutoSizing(): int
    {
        return $this->minimumHeightForAutoSizing;
    }

    /**
     * Set the value of minimumHeightForAutoSizing
     */
    public function setMinimumHeightForAutoSizing(int $minimumHeightForAutoSizing): self
    {
        $this->minimumHeightForAutoSizing = $minimumHeightForAutoSizing;

        return $this;
    }

    /**
     * Get the value of useMinimumWidthForAutoSizing
     */
    public function isUseMinimumWidthForAutoSizing(): bool
    {
        return $this->useMinimumWidthForAutoSizing;
    }

    /**
     * Set the value of useMinimumWidthForAutoSizing
     */
    public function setUseMinimumWidthForAutoSizing(bool $useMinimumWidthForAutoSizing): self
    {
        $this->useMinimumWidthForAutoSizing = $useMinimumWidthForAutoSizing;

        return $this;
    }

    /**
     * Get the value of minimumWidthForAutoSizing
     */
    public function getMinimumWidthForAutoSizing(): int
    {
        return $this->minimumWidthForAutoSizing;
    }

    /**
     * Set the value of minimumWidthForAutoSizing
     */
    public function setMinimumWidthForAutoSizing(int $minimumWidthForAutoSizing): self
    {
        $this->minimumWidthForAutoSizing = $minimumWidthForAutoSizing;

        return $this;
    }

    /**
     * Get the value of useNoLineBreaksForAutoSizing
     */
    public function isUseNoLineBreaksForAutoSizing(): bool
    {
        return $this->useNoLineBreaksForAutoSizing;
    }

    /**
     * Set the value of useNoLineBreaksForAutoSizing
     */
    public function setUseNoLineBreaksForAutoSizing(bool $useNoLineBreaksForAutoSizing): self
    {
        $this->useNoLineBreaksForAutoSizing = $useNoLineBreaksForAutoSizing;

        return $this;
    }

    /**
     * Get the value of columnRuleOverride
     */
    public function isColumnRuleOverride(): bool
    {
        return $this->columnRuleOverride;
    }

    /**
     * Set the value of columnRuleOverride
     */
    public function setColumnRuleOverride(bool $columnRuleOverride): self
    {
        $this->columnRuleOverride = $columnRuleOverride;

        return $this;
    }

    /**
     * Get the value of columnRuleOffset
     */
    public function getColumnRuleOffset(): int
    {
        return $this->columnRuleOffset;
    }

    /**
     * Set the value of columnRuleOffset
     */
    public function setColumnRuleOffset(int $columnRuleOffset): self
    {
        $this->columnRuleOffset = $columnRuleOffset;

        return $this;
    }

    /**
     * Get the value of columnRuleTopInset
     */
    public function getColumnRuleTopInset(): int
    {
        return $this->columnRuleTopInset;
    }

    /**
     * Set the value of columnRuleTopInset
     */
    public function setColumnRuleTopInset(int $columnRuleTopInset): self
    {
        $this->columnRuleTopInset = $columnRuleTopInset;

        return $this;
    }

    /**
     * Get the value of columnRuleInsetChainOverride
     */
    public function isColumnRuleInsetChainOverride(): bool
    {
        return $this->columnRuleInsetChainOverride;
    }

    /**
     * Set the value of columnRuleInsetChainOverride
     */
    public function setColumnRuleInsetChainOverride(bool $columnRuleInsetChainOverride): self
    {
        $this->columnRuleInsetChainOverride = $columnRuleInsetChainOverride;

        return $this;
    }

    /**
     * Get the value of columnRuleBottomInset
     */
    public function getColumnRuleBottomInset(): int
    {
        return $this->columnRuleBottomInset;
    }

    /**
     * Set the value of columnRuleBottomInset
     */
    public function setColumnRuleBottomInset(int $columnRuleBottomInset): self
    {
        $this->columnRuleBottomInset = $columnRuleBottomInset;

        return $this;
    }

    /**
     * Get the value of columnRuleStrokeWidth
     */
    public function getColumnRuleStrokeWidth(): int
    {
        return $this->columnRuleStrokeWidth;
    }

    /**
     * Set the value of columnRuleStrokeWidth
     */
    public function setColumnRuleStrokeWidth(int $columnRuleStrokeWidth): self
    {
        $this->columnRuleStrokeWidth = $columnRuleStrokeWidth;

        return $this;
    }

    /**
     * Get the value of columnRuleStrokeColor
     */
    public function getColumnRuleStrokeColor(): string
    {
        return $this->columnRuleStrokeColor;
    }

    /**
     * Set the value of columnRuleStrokeColor
     */
    public function setColumnRuleStrokeColor(string $columnRuleStrokeColor): self
    {
        $this->columnRuleStrokeColor = $columnRuleStrokeColor;

        return $this;
    }

    /**
     * Get the value of columnRuleStrokeType
     */
    public function getColumnRuleStrokeType(): string
    {
        return $this->columnRuleStrokeType;
    }

    /**
     * Set the value of columnRuleStrokeType
     */
    public function setColumnRuleStrokeType(string $columnRuleStrokeType): self
    {
        $this->columnRuleStrokeType = $columnRuleStrokeType;

        return $this;
    }

    /**
     * Get the value of columnRuleStrokeTint
     */
    public function getColumnRuleStrokeTint(): int
    {
        return $this->columnRuleStrokeTint;
    }

    /**
     * Set the value of columnRuleStrokeTint
     */
    public function setColumnRuleStrokeTint(int $columnRuleStrokeTint): self
    {
        $this->columnRuleStrokeTint = $columnRuleStrokeTint;

        return $this;
    }

    /**
     * Get the value of columnRuleOverprintOverride
     */
    public function isColumnRuleOverprintOverride(): bool
    {
        return $this->columnRuleOverprintOverride;
    }

    /**
     * Set the value of columnRuleOverprintOverride
     */
    public function setColumnRuleOverprintOverride(bool $columnRuleOverprintOverride): self
    {
        $this->columnRuleOverprintOverride = $columnRuleOverprintOverride;

        return $this;
    }

    /**
     * Get the value of footnotesEnableOverrides
     */
    public function isFootnotesEnableOverrides(): bool
    {
        return $this->footnotesEnableOverrides;
    }

    /**
     * Set the value of footnotesEnableOverrides
     */
    public function setFootnotesEnableOverrides(bool $footnotesEnableOverrides): self
    {
        $this->footnotesEnableOverrides = $footnotesEnableOverrides;

        return $this;
    }

    /**
     * Get the value of footnotesSpanAcrossColumns
     */
    public function isFootnotesSpanAcrossColumns(): bool
    {
        return $this->footnotesSpanAcrossColumns;
    }

    /**
     * Set the value of footnotesSpanAcrossColumns
     */
    public function setFootnotesSpanAcrossColumns(bool $footnotesSpanAcrossColumns): self
    {
        $this->footnotesSpanAcrossColumns = $footnotesSpanAcrossColumns;

        return $this;
    }

    /**
     * Get the value of footnotesMinimumSpacing
     */
    public function getFootnotesMinimumSpacing(): int
    {
        return $this->footnotesMinimumSpacing;
    }

    /**
     * Set the value of footnotesMinimumSpacing
     */
    public function setFootnotesMinimumSpacing(int $footnotesMinimumSpacing): self
    {
        $this->footnotesMinimumSpacing = $footnotesMinimumSpacing;

        return $this;
    }

    /**
     * Get the value of footnotesSpaceBetween
     */
    public function getFootnotesSpaceBetween(): int
    {
        return $this->footnotesSpaceBetween;
    }

    /**
     * Set the value of footnotesSpaceBetween
     */
    public function setFootnotesSpaceBetween(int $footnotesSpaceBetween): self
    {
        $this->footnotesSpaceBetween = $footnotesSpaceBetween;

        return $this;
    }

    /**
     * Get the value of verticalBalanceColumns
     */
    public function isVerticalBalanceColumns(): bool
    {
        return $this->verticalBalanceColumns;
    }

    /**
     * Set the value of verticalBalanceColumns
     */
    public function setVerticalBalanceColumns(bool $verticalBalanceColumns): self
    {
        $this->verticalBalanceColumns = $verticalBalanceColumns;

        return $this;
    }
}
