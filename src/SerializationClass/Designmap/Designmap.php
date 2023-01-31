<?php
namespace Jvital\Idml\SerializationClass\Designmap;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\Type;
use Jvital\Idml\SerializationClass\Trait\AccurateLABSpotsAttribute;
use Jvital\Idml\SerializationClass\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Trait\SelfAttribute;
use Jvital\Idml\SerializationClass\Trait\StoryListAttribute;
use Jvital\Idml\SerializationClass\Trait\ZeroPointAttribute;
use Jvital\Idml\SerializationClass\Utils\IdpkgWrapper;

/** 
 * @XmlRoot("Document") 
*/
class Designmap extends IdpkgWrapper
{

    use SelfAttribute;
    use StoryListAttribute;
    use NameAttribute;
    use ZeroPointAttribute;
    use AccurateLABSpotsAttribute;

    /**
    * @SerializedName("idPkg:Graphic")
    */
    private IdpkgGraphic $graphic;

    /**
    * @SerializedName("idPkg:Fonts")
    */
    private IdpkgFonts $fonts;

    /**
    * @SerializedName("idPkg:Styles")
    */
    private IdpkgStyles $styles;

    /**
    * @SerializedName("idPkg:Tags")
    */
    private IdpkgTags $tags;

    /**
    * @Type("array<Jvital\Idml\SerializationClass\Designmap\IdpkgSpread>")
    * @XmlList(inline = true, entry = "idPkg:Spread")
    */
    private array $spreads;

    /**
    * @SerializedName("idPkg:BackingStory")
    */
    private IdpkgBackingStory $backingStory;

    /**
    * @Type("array<Jvital\Idml\SerializationClass\Designmap\IdpkgStory>")
    * @XmlList(inline = true, entry = "idPkg:Story")
    */
    private array $stories;

    
    /**
    * @XmlAttribute
    * @SerializedName("ActiveLayer")
    */
    private string $activeLayer;

    public function __construct()
    {
        $this->graphic = new IdpkgGraphic();
        $this->fonts = new IdpkgFonts();
        $this->styles = new IdpkgStyles();
        $this->tags = new IdpkgTags();
        $this->backingStory = new IdpkgBackingStory();
        $this->setName('undefined');
    }

    /**
     * Set the value of activeLayer
     */
    public function setActiveLayer(string $activeLayer): self
    {
        $this->activeLayer = $activeLayer;

        return $this;
    }

    /**
     * Get the value of activeLayer
     */
    public function getActiveLayer(): string
    {
        return $this->activeLayer;
    }
}
