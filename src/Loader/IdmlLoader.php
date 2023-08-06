<?php
namespace Jvital\Idml\Loader;

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\IdmlDocument;
use Jvital\Idml\SerializationClass\Designmap\Designmap;
use Jvital\Idml\SerializationClass\Idml\Ressources\Fonts\FontIdpkg;
use Jvital\Idml\SerializationClass\Idml\Ressources\Graphics\GraphicIdpkg;
use Jvital\Idml\SerializationClass\Idml\Ressources\Styles\StylesIdpkg;
use Jvital\Idml\SerializationClass\Idml\Spread\SpreadIdpkg;
use Jvital\Idml\SerializationClass\Idml\Stories\StoryIdpkg;
use ZipArchive;

class IdmlLoader{

    public function load($idmlFile):IdmlDocument{
        $serializer = SerializerBuilder::create()->build();
        $filename = basename($idmlFile, ".idml");
        $zip = new ZipArchive;
        $zip->open($idmlFile);
        $document = new IdmlDocument($filename);
        for ($i = 0; $i < $zip->numFiles; $i++) {
            $name = $zip->getNameIndex($i);
            $contents = $zip->getFromIndex($i);
    
            if (strpos($name, 'Spread') === 0 && $name!="Spreads/"){
                
                $spreadDeSerialized = $serializer->deSerialize($contents, SpreadIdpkg::class,'xml');
                $document->addSpreads($spreadDeSerialized);
                continue;
            }
    
            if (strpos($name, 'Stories') === 0 && $name!= "Stories/"){
            
                $storyDeserialized = $serializer->deSerialize($contents, StoryIdpkg::class,'xml');
                $document->addStory($storyDeserialized);
                continue;

            }
    
            if (strpos($name, 'designmap') === 0){
                
                $designMapDeserialized = $serializer->deSerialize($contents, Designmap::class,'xml');
                $document->setDesignMap($designMapDeserialized);
                continue;

            }
            
            if (strpos($name, "Resources/Fonts.xml") === 0){
                
                $font = $serializer->deSerialize($contents, FontIdpkg::class,'xml');
                $document->setFonts($font);
                continue;

            }
        
            if (strpos($name, "Resources/Graphic.xml") === 0){
                
                $graphic = $serializer->deSerialize($contents, GraphicIdpkg::class,'xml');
                $document->setGraphic($graphic);
                continue;

            }
        
            if (strpos($name, "Resources/Styles.xml") === 0){
                
                $styles = $serializer->deSerialize($contents, StylesIdpkg::class,'xml');
                $document->setStyles($styles);
                continue;

            }
        }
        $zip->close();

        return $document;
    }


}