<?php

use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\Properties\Properties;
use Jvital\Idml\Spread\FlattenerPreference;
use Jvital\Idml\Spread\RasterVectorBalance;
use PHPUnit\Framework\TestCase;

class FlattenerPreferenceCreationTest extends TestCase{

    /**
     * @var string (xml)
     */
    protected $xmlExpect;

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
        $this->xmlExpect = file_get_contents(__DIR__.'/expects/SpreadIdpkgExpect.xml');
    }

    public function testLineArtAndTextResolution(){

        $spread = new FlattenerPreference();

        $spread->setLineArtAndTextResolution(350);
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');

        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, FlattenerPreference::class,'xml');
        $this->assertEquals($spreadDeSerialized->getLineArtAndTextResolution(), 350);
    }

    public function testGradientAndMeshResolution(){

        $spread = new FlattenerPreference();

        $spread->setGradientAndMeshResolution(200);
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');

        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, FlattenerPreference::class,'xml');
        $this->assertEquals($spreadDeSerialized-> getGradientAndMeshResolution(), 200);
    }

    public function testClipComplexRegions(){

        $spread = new FlattenerPreference();

        $spread->setClipComplexRegions(true);
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');

        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, FlattenerPreference::class,'xml');
        $this->assertTrue($spreadDeSerialized-> isClipComplexRegions());
    }

    public function testConvertAllStrokesToOutlines(){

        $spread = new FlattenerPreference();

        $spread->setConvertAllStrokesToOutlines(true);
        $spreadSerialized = $this->serializer->serialize($spread, 'xml');

        $spreadDeSerialized = $this->serializer->deSerialize($spreadSerialized, FlattenerPreference::class,'xml');
        $this->assertTrue($spreadDeSerialized-> isConvertAllStrokesToOutlines());
    }

    public function testConvertAllTextToOutlines(){

        $flattenerPreference = new FlattenerPreference();
        $properties = new Properties();
        $rasterVector = new RasterVectorBalance();
        $rasterVector->setValue("500");
        $properties->setRasterVectorBalance($rasterVector);
        $flattenerPreference->setConvertAllTextToOutlines(true);
        $flattenerPreference->setProperties($properties);
        $spreadSerialized = $this->serializer->serialize($flattenerPreference, 'xml');

        $flattenerPreference = $this->serializer->deSerialize($spreadSerialized, FlattenerPreference::class,'xml');
        $this->assertTrue($flattenerPreference-> isConvertAllTextToOutlines());
        $this->assertEquals($flattenerPreference->getProperties(), $properties);
        $this->assertEquals($flattenerPreference->getProperties()->getRasterVectorBalance(), $rasterVector);
    }

}