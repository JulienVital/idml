<?php
namespace Jvital\Idml\Builder;

use Jvital\Idml\SerializationClass\Designmap\Designmap;
use Jvital\Idml\SerializationClass\Designmap\IdpkgBackingStory;
use Jvital\Idml\SerializationClass\Ressources\Fonts\FontIdpkg;
use Jvital\Idml\SerializationClass\Ressources\Graphics\GraphicIdpkg;
use Jvital\Idml\SerializationClass\Ressources\Styles\StylesIdpkg;
use Jvital\Idml\SerializationClass\Spread\SpreadIdpkg;
use Jvital\Idml\SerializationClass\Stories\StoryIdpkg;
use Jvital\Idml\SerializationClass\XML\Tags\Tags;

class IdmlDocument{
    
    private string $name;
    private IdpkgBackingStory $backingStory;
    private FontIdpkg $fonts;
    private GraphicIdpkg $graphic;
    private StylesIdpkg $styles;
    private Designmap $designMap;

    private array $spreads=[];
    private array $stories=[];
    private Tags $tags;

    public function __construct($name){
        $this->name = $name;
        $this->backingStory = new IdpkgBackingStory();
        $this->fonts = new FontIdpkg();
        $this->graphic = new GraphicIdpkg();
        $this->styles = new StylesIdpkg();
        $this->designMap = new Designmap();
        $this->tags = new Tags();
    }

    public function generate($targetFolder){
        $maker = new Maker($this, $targetFolder);

        $maker->generate();
    }
    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the value of backingStory
     */
    public function getBackingStory(): IdpkgBackingStory
    {
        return $this->backingStory;
    }

    /**
     * Get the value of fonts
     */
    public function getFonts(): FontIdpkg
    {
        return $this->fonts;
    }

    /**
     * Get the value of graphic
     */
    public function getGraphic(): GraphicIdpkg
    {
        return $this->graphic;
    }

    /**
     * Get the value of styles
     */
    public function getStyles(): StylesIdpkg
    {
        return $this->styles;
    }

    /**
     * Get the value of designMap
     */
    public function getDesignMap(): Designmap
    {
        return $this->designMap;
    }

    /**
     * Get the value of designMap
     */
    public function getTags(): Tags
    {
        return $this->tags;
    }

    /**
     * Get the value of spreads
     */
    public function getSpreads(): array
    {
        return $this->spreads;
    }

    /**
     * Set the value of spreads
     */
    public function setSpreads(array $spreads): self
    {
        $this->spreads = $spreads;

        return $this;
    }

    /**
     * Add a spread
     */
    public function addSpreads(SpreadIdpkg $spread): self
    {
        $this->spreads[] = $spread;

        return $this;
    }


    /**
     * Get the value of stories
     */
    public function getStories(): array
    {
        return $this->stories;
    }

    /**
     * Set the value of stories
     */
    public function setStories(array $stories): self
    {
        $this->stories = $stories;

        return $this;
    }

    /**
     * Add a story
     */
    public function addStory(StoryIdpkg $story): self
    {
        $this->stories[] = $story;

        return $this;
    }

    /**
     * Set the value of designMap
     */
    public function setDesignMap(Designmap $designMap): self
    {
        $this->designMap = $designMap;

        return $this;
    }

    /**
     * Set the value of fonts
     */
    public function setFonts(FontIdpkg $fonts): self
    {
        $this->fonts = $fonts;

        return $this;
    }

    /**
     * Set the value of graphic
     */
    public function setGraphic(GraphicIdpkg $graphic): self
    {
        $this->graphic = $graphic;

        return $this;
    }

    /**
     * Set the value of styles
     */
    public function setStyles(StylesIdpkg $styles): self
    {
        $this->styles = $styles;

        return $this;
    }
}