<?php
namespace Jvital\Idml\Builder;

use Jvital\Idml\SerializationClass\Idml\Designmap\Designmap;
use Jvital\Idml\SerializationClass\Idml\Designmap\IdpkgBackingStory;
use Jvital\Idml\SerializationClass\Idml\Ressources\Fonts\FontIdpkg;
use Jvital\Idml\SerializationClass\Idml\Ressources\Graphics\GraphicIdpkg;
use Jvital\Idml\SerializationClass\Idml\Ressources\Styles\StylesIdpkg;
use Jvital\Idml\SerializationClass\Idml\Spread\Page;
use Jvital\Idml\SerializationClass\Idml\Spread\Spread;
use Jvital\Idml\SerializationClass\Idml\Spread\SpreadIdpkg;
use Jvital\Idml\SerializationClass\Idml\Stories\StoryIdpkg;
use Jvital\Idml\SerializationClass\Idml\XML\Tags\Tags;

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

    /**
     * Add pages
     */
    public function addPages(array $pages): self
    {   
        if (!$pages){
            return $this;
        }
        
            $page = array_shift($pages);
            $spread = $this->createFirstSpread($page);

            $this->addSpread($spread->getSpreadIdpkg());      
        
        for ($i = 0; $i < count($pages); $i += 2) {
            
            $page1 = $pages[$i];
            $page2 = isset($pages[$i + 1]) ? $pages[$i + 1] : null;
            $spread = $this->createSpread($page1, $page2);
            $this->addSpread($spread->getSpreadIdpkg());      
        }
        return $this;
    }

    private function createSpread($page1, $page2 = null){
        $spread = new Spread(uniqid());
        $spread->addPage(new Page(uniqid()));
        if ($page2) {
            $spread->addPage(new Page(uniqid()));
        }
        return $spread;
    }

    private function createFirstSpread($page1){
        $spread = new Spread(uniqid());
        $spread->addPage(new Page(uniqid()));
        $spread->setBindingLocation(0);
        return $spread;
    }

    private function addSpread(SpreadIdpkg $spread){
        $this->spreads[] = $spread;
        $this->designMap->addSpread($spread);
    }

    public function getPages(){
        $pages = [];
        foreach ($this->spreads as $idpkgSpread) {
            $pages = array_merge($pages, $idpkgSpread->getSpread()->getPages());
        }
        return $pages;
    }
}