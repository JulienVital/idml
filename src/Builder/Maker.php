<?php
namespace Jvital\Idml\Builder;

use Exception;
use JMS\Serializer\SerializerBuilder;
use ZipArchive;

class Maker{
    
    private IdmlDocument $idmlDocument;
    private string $targetFolder;

    const GRAPHIC_PATH = "Resources/Graphic.xml";
    const FONTS_PATH = "Resources/Fonts.xml";
    const STYLES_PATH = "Resources/Styles.xml";
    const BACKINGSTORY_PATH = "XML/BackingStory.xml";
    const TAGS_PATH = "XML/Tags.xml";
    const SPREADS_PATH = "Spreads/Spread_";

    public function __construct(IdmlDocument $document, $targetFolder){
        $this->idmlDocument = $document;
        $this->targetFolder = $targetFolder;
    }

    public function generate(){
        
        $document = $this->getDocument() ; 
        $documentName = $document->getName() ;

        $zip = new ZipArchive(); 

        $serializer = SerializerBuilder::create()->build();
        try{
            if($zip->open($this->targetFolder."/$documentName.idml", ZipArchive::CREATE) == TRUE)
            {
                $zip->addFile(__DIR__."/rawFiles/META-INF/container.xml", "META-INF/container.xml");
                $zip->addFile(__DIR__."/rawFiles/mimetype", "mimetype");
                
                $filesToAdd = [
                    self::BACKINGSTORY_PATH => $document->getBackingStory(),
                    self::TAGS_PATH => $document->getTags(),
                    self::FONTS_PATH => $document->getFonts(),
                    self::GRAPHIC_PATH => $document->getGraphic(),
                    self::STYLES_PATH => $document->getStyles()
                ];

                $spreads = $document->getSpreads();
                foreach ($spreads as $spread) {
                    $spreadSerialized = $serializer->serialize($spread, 'xml');
                    $name= self::SPREADS_PATH.$spread->getName().'.xml';
                    $zip->addFromString($name, $spreadSerialized);
                }
                
                foreach ($filesToAdd as $filePath => $fileContent) {
                    $styleSerialized = $serializer->serialize($fileContent, 'xml');
                    $zip->addFromString($filePath, $styleSerialized);
                }
                $newLine = '<?aid style="50" type="document" readerVersion="6.0" featureSet="257" product="17.2(105)" ?>'."\n";
                $designMap = $document->getDesignMap();
                $designMapSerialized = $serializer->serialize($designMap, 'xml');
                $position = strpos($designMapSerialized, "\n") + 1;
                $designMapSerialized = substr_replace($designMapSerialized, $newLine, $position, 0);

                $zip->addFromString("designmap.xml", $designMapSerialized);
                $zip->close();
            }
        }catch(Exception $e)
        {
            throw new Exception("Cant create ZipFile");
        }
    }

    /**
     * Get the value of document
     */
    public function getDocument(): IdmlDocument
    {
        return $this->idmlDocument;
    }
}