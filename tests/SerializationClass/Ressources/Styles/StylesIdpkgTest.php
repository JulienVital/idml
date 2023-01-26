<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Ressources\Styles\StylesIdpkg;
use Jvital\Tests\Helper\XmlTestCase;

class StylesIdpkgTest extends XmlTestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    private $xmlExpect;

    public function __construct(){
        parent::__construct();
        $this->xmlExpect['StylesIdpkg'] = file_get_contents(__DIR__.'/expects/StylesIdpkg.xml');
    }

    public function testDeserializeSerializeIsSame(){

        $StyleDeSerialized = $this->deSerialize($this->xmlExpect['StylesIdpkg'], StylesIdpkg::class,'xml');
        $styleSerialized = $this->serialize($StyleDeSerialized, 'xml');

        $this->assertXmlStringEqualsXmlString($styleSerialized, $this->xmlExpect['StylesIdpkg']);
    }

    public function testDeserializeSerializeIsSameWithBigParagraphStyle(){
        $fileLoaded= file_get_contents(__DIR__.'/expects/styles.xml');
        $styleDeSerialized = $this->deSerialize($fileLoaded, StylesIdpkg::class,'xml');
        $styleSerialized = $this->serialize($styleDeSerialized, 'xml');
        $this->assertXmlStringEqualsXmlString($styleSerialized, $fileLoaded);
    }
}