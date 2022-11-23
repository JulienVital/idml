<?php
namespace Jvital\Idml\SerializationClass\Spread;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Trait\Properties;

/** 
 * @XmlRoot("FlattenerPreference") 
*/
class FlattenerPreference
{

    use Properties;
    /**
     * @XmlAttribute
     * @SerializedName("LineArtAndTextResolution")
     */
    private int $lineArtAndTextResolution= 300;

    
    /**
     * @XmlAttribute
     * @SerializedName("GradientAndMeshResolution")
     */
    private int $gradientAndMeshResolution= 150;

    /**
     * @XmlAttribute
     * @SerializedName("ClipComplexRegions")
     */
    private bool $clipComplexRegions= false;

    /**
     * @XmlAttribute
     * @SerializedName("ConvertAllStrokesToOutlines")
     */
    private bool $convertAllStrokesToOutlines= false;

    /**
     * @XmlAttribute
     * @SerializedName("ConvertAllTextToOutlines")
     */
    private bool $convertAllTextToOutlines= false;

    /**
     * Get the value of lineArtAndTextResolution
     */
    public function getLineArtAndTextResolution(): int
    {
        return $this->lineArtAndTextResolution;
    }

    /**
     * Set the value of lineArtAndTextResolution
     */
    public function setLineArtAndTextResolution(int $lineArtAndTextResolution): self
    {
        $this->lineArtAndTextResolution = $lineArtAndTextResolution;

        return $this;
    }

    /**
     * Get the value of gradientAndMeshResolution
     */
    public function getGradientAndMeshResolution(): int
    {
        return $this->gradientAndMeshResolution;
    }

    /**
     * Set the value of gradientAndMeshResolution
     */
    public function setGradientAndMeshResolution(int $gradientAndMeshResolution): self
    {
        $this->gradientAndMeshResolution = $gradientAndMeshResolution;

        return $this;
    }

    /**
     * Get the value of clipComplexRegions
     */
    public function isClipComplexRegions(): bool
    {
        return $this->clipComplexRegions;
    }

    /**
     * Set the value of clipComplexRegions
     */
    public function setClipComplexRegions(bool $clipComplexRegions): self
    {
        $this->clipComplexRegions = $clipComplexRegions;

        return $this;
    }

    /**
     * Get the value of convertAllStrokesToOutlines
     */
    public function isConvertAllStrokesToOutlines(): bool
    {
        return $this->convertAllStrokesToOutlines;
    }

    /**
     * Set the value of convertAllStrokesToOutlines
     */
    public function setConvertAllStrokesToOutlines(bool $convertAllStrokesToOutlines): self
    {
        $this->convertAllStrokesToOutlines = $convertAllStrokesToOutlines;

        return $this;
    }

    /**
     * Get the value of convertAllTextToOutlines
     */
    public function isConvertAllTextToOutlines(): bool
    {
        return $this->convertAllTextToOutlines;
    }

    /**
     * Set the value of convertAllTextToOutlines
     */
    public function setConvertAllTextToOutlines(bool $convertAllTextToOutlines): self
    {
        $this->convertAllTextToOutlines = $convertAllTextToOutlines;

        return $this;
    }
}
