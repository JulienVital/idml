<?php
namespace Jvital\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/** 
 * @XmlRoot("MarginPreference") 
*/
class MarginPreference
{
    
    /**
     * @XmlAttribute
     * @SerializedName("ColumnCount")
     */
    private int $columnCount;
    
    /**
     * @XmlAttribute
     * @SerializedName("ColumnGutter")
     */
    private string $columnGutter;
    
    /**
     * @XmlAttribute
     * @SerializedName("Top")
     */
    private string $top;
    
    /**
     * @XmlAttribute
     * @SerializedName("Bottom")
     */
    private string $bottom;
    
    /**
     * @XmlAttribute
     * @SerializedName("Left")
     */
    private string $left;
    
    /**
     * @XmlAttribute
     * @SerializedName("Right")
     */
    private string $right;
    
    /**
     * @XmlAttribute
     * @SerializedName("ColumnDirection")
     */
    private string $columnDirection="Horizontal" ;
    
    /**
     * @XmlAttribute
     * @SerializedName("ColumnsPositions")
     */
    private string $columnsPositions;

    /**
     * Get the value of top
     */
    public function getTop(): string
    {
        return $this->top;
    }

    /**
     * Set the value of top
     */
    public function setTop(string $top): self
    {
        $this->top = $top;

        return $this;
    }

    /**
     * Get the value of bottom
     */
    public function getBottom(): string
    {
        return $this->bottom;
    }

    /**
     * Set the value of bottom
     */
    public function setBottom(string $bottom): self
    {
        $this->bottom = $bottom;

        return $this;
    }

    /**
     * Get the value of left
     */
    public function getLeft(): string
    {
        return $this->left;
    }

    /**
     * Set the value of left
     */
    public function setLeft(string $left): self
    {
        $this->left = $left;

        return $this;
    }

    /**
     * Get the value of right
     */
    public function getRight(): string
    {
        return $this->right;
    }

    /**
     * Set the value of right
     */
    public function setRight(string $right): self
    {
        $this->right = $right;

        return $this;
    }

    /**
     * Get the value of columnDirection
     */
    public function getColumnDirection(): string
    {
        return $this->columnDirection;
    }

    /**
     * Set the value of columnDirection
     */
    public function setColumnDirection(string $columnDirection): self
    {
        $this->columnDirection = $columnDirection;

        return $this;
    }

    /**
     * Get the value of columnsPositions
     */
    public function getColumnsPositions(): string
    {
        return $this->columnsPositions;
    }

    /**
     * Set the value of columnsPositions
     */
    public function setColumnsPositions(string $columnsPositions): self
    {
        $this->columnsPositions = $columnsPositions;

        return $this;
    }

    /**
     * Get the value of columnCount
     */
    public function getColumnCount(): int
    {
        return $this->columnCount;
    }

    /**
     * Set the value of columnCount
     */
    public function setColumnCount(int $columnCount): self
    {
        $this->columnCount = $columnCount;

        return $this;
    }

    /**
     * Get the value of columnGutter
     */
    public function getColumnGutter(): string
    {
        return $this->columnGutter;
    }

    /**
     * Set the value of columnGutter
     */
    public function setColumnGutter(string $columnGutter): self
    {
        $this->columnGutter = $columnGutter;

        return $this;
    }
}
