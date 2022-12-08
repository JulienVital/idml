<?php
namespace Jvital\Idml\Builder;

use Jvital\Idml\SerializationClass\Designmap\Designmap;
use Jvital\Idml\SerializationClass\Designmap\IdpkgBackingStory;
use Jvital\Idml\SerializationClass\Designmap\IdpkgStyles;
use Jvital\Idml\SerializationClass\Ressources\Fonts\FontIdpkg;
use Jvital\Idml\SerializationClass\Ressources\Graphics\GraphicIdpkg;
use Jvital\Idml\SerializationClass\Ressources\Styles\StylesIdpkg;

class IdmlDocument{
    
    private string $name;
    private IdpkgBackingStory $backingStory;
    private FontIdpkg $fonts;
    private GraphicIdpkg $graphic;
    private StylesIdpkg $styles;
    private Designmap $designMap;

    public function __construct($name){
        $this->name= $name;
        $this->backingStory = new IdpkgBackingStory();
        $this->fonts = new FontIdpkg();
        $this->graphic = new GraphicIdpkg();
        $this->styles = new StylesIdpkg();
        $this->designMap = new Designmap();
    }

    public function generate($targetFolder){
        $maker = new Maker($this, $targetFolder);

        $maker->exec();
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
}