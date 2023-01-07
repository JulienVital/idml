<?php
namespace Jvital\Idml\Builder;

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Designmap\Designmap;
use Jvital\Idml\SerializationClass\Ressources\Fonts\FontIdpkg;
use Jvital\Idml\SerializationClass\Ressources\Graphics\GraphicIdpkg;
use Jvital\Idml\SerializationClass\Ressources\Styles\StylesIdpkg;
use Jvital\Idml\SerializationClass\Spread\SpreadIdpkg;
use Jvital\Idml\SerializationClass\Stories\StoryIdpkg;
use ZipArchive;

class Loader{

    public function load($idmlFile):IdmlDocument{
        $serializer = SerializerBuilder::create()->build();
        $filename = basename($idmlFile, ".idml");
        $zip = new ZipArchive;
        $zip->open($idmlFile);
        $document = new IdmlDocument($filename);
        for ($i = 0; $i < $zip->numFiles; $i++) {
            $name = $zip->getNameIndex($i);
            $contents = $zip->getFromIndex($i);
    
            if (strpos($name, 'Spread') === 0){
                
                $spreadDeSerialized = $serializer->deSerialize($contents, SpreadIdpkg::class,'xml');
                $document->addSpreads($spreadDeSerialized);
            }
    
            if (strpos($name, 'Stories') === 0){
            
                $storyDeserialized = $serializer->deSerialize($contents, StoryIdpkg::class,'xml');
                $document->addStory($storyDeserialized);
            }
    
            if (strpos($name, 'designmap') === 0){
                
                $designMapDeserialized = $serializer->deSerialize($contents, Designmap::class,'xml');
                $document->setDesignMap($designMapDeserialized);
            }
            
            if (strpos($name, "Resources/Fonts.xml") === 0){
                
                $font = $serializer->deSerialize($contents, FontIdpkg::class,'xml');
                $document->setFonts($font);
            }
        
            if (strpos($name, "Resources/Graphic.xml") === 0){
                
                $graphic = $serializer->deSerialize($contents, GraphicIdpkg::class,'xml');
                $document->setGraphic($graphic);
            }
        
            if (strpos($name, "Resources/Styles.xml") === 0){
                
                $styles = $serializer->deSerialize($contents, StylesIdpkg::class,'xml');
                $document->setStyles($styles);
            }
        }
        $zip->close();

        return $document;
    }


}