<?php
namespace Jvital\Idml\SerializationClass\Idml\Ressources\Styles;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/** 
 * @XmlRoot("FrameFittingOption") 
*/
class FrameFittingOption
{

    /**
     * @XmlAttribute
     * @SerializedName("AutoFit")
     */
    private bool $autoFit;

    /**
     * @XmlAttribute
     * @SerializedName("LeftCrop")
     */
    private int $leftCrop;

    /**
     * @XmlAttribute
     * @SerializedName("TopCrop")
     */
    private int $topCrop;

    /**
     * @XmlAttribute
     * @SerializedName("RightCrop")
     */
    private int $rightCrop;

    /**
     * @XmlAttribute
     * @SerializedName("BottomCrop")
     */
    private int $bottomCrop;

    /**
     * @XmlAttribute
     * @SerializedName("FittingOnEmptyFrame")
     */
    private string $fittingOnEmptyFrame;

    /**
     * @XmlAttribute
     * @SerializedName("FittingAlignment")
     */
    private string $fittingAlignment;


    /**
     * Get the value of autoFit
     */
    public function isAutoFit(): bool
    {
        return $this->autoFit;
    }

    /**
     * Set the value of autoFit
     */
    public function setAutoFit(bool $autoFit): self
    {
        $this->autoFit = $autoFit;

        return $this;
    }

    /**
     * Get the value of leftCrop
     */
    public function getLeftCrop(): int
    {
        return $this->leftCrop;
    }

    /**
     * Set the value of leftCrop
     */
    public function setLeftCrop(int $leftCrop): self
    {
        $this->leftCrop = $leftCrop;

        return $this;
    }

    /**
     * Get the value of topCrop
     */
    public function getTopCrop(): int
    {
        return $this->topCrop;
    }

    /**
     * Set the value of topCrop
     */
    public function setTopCrop(int $topCrop): self
    {
        $this->topCrop = $topCrop;

        return $this;
    }

    /**
     * Get the value of rightCrop
     */
    public function getRightCrop(): int
    {
        return $this->rightCrop;
    }

    /**
     * Set the value of rightCrop
     */
    public function setRightCrop(int $rightCrop): self
    {
        $this->rightCrop = $rightCrop;

        return $this;
    }

    /**
     * Get the value of bottomCrop
     */
    public function getBottomCrop(): int
    {
        return $this->bottomCrop;
    }

    /**
     * Set the value of bottomCrop
     */
    public function setBottomCrop(int $bottomCrop): self
    {
        $this->bottomCrop = $bottomCrop;

        return $this;
    }

    /**
     * Get the value of fittingOnEmptyFrame
     */
    public function getFittingOnEmptyFrame(): string
    {
        return $this->fittingOnEmptyFrame;
    }

    /**
     * Set the value of fittingOnEmptyFrame
     */
    public function setFittingOnEmptyFrame(string $fittingOnEmptyFrame): self
    {
        $this->fittingOnEmptyFrame = $fittingOnEmptyFrame;

        return $this;
    }

    /**
     * Get the value of fittingAlignment
     */
    public function getFittingAlignment(): string
    {
        return $this->fittingAlignment;
    }

    /**
     * Set the value of fittingAlignment
     */
    public function setFittingAlignment(string $fittingAlignment): self
    {
        $this->fittingAlignment = $fittingAlignment;

        return $this;
    }
}
