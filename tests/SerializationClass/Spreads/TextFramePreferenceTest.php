<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Ressources\Styles\ParagraphStyle;
use Jvital\Idml\SerializationClass\Spread\TextFramePreference;
use PHPUnit\Framework\TestCase;

class TextFramePreferenceTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function testDeserializeSerializeIsSame(){
        $textFramePreferenceXml = file_get_contents(__DIR__.'/expects/TextFramePreference.xml');

        $textFramePreference = $this->serializer->deSerialize($textFramePreferenceXml, TextFramePreference::class,'xml');
        $textFramePreferenceSerialized = $this->serializer->serialize($textFramePreference, 'xml');

        $this->assertEquals($textFramePreferenceSerialized, $textFramePreferenceXml);
    }
}