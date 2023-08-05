<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Idml\Ressources\Fonts\Font;
use Jvital\Idml\SerializationClass\Idml\Ressources\Fonts\FontFamily;
use Jvital\Idml\SerializationClass\Idml\Ressources\Fonts\FontIdpkg;
use PHPUnit\Framework\TestCase;

class FontTest extends TestCase{

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(){
        parent::__construct();
        $this->serializer = SerializerBuilder::create()->build();
        $this->xmlExpect['Font'] = file_get_contents(__DIR__.'/expects/Font.xml');
    }

    public function testDeserializeSerializeIsSame(){

        $fontDeSerialized = $this->serializer->deSerialize($this->xmlExpect['Font'], Font::class,'xml');
        $fontSerialized = $this->serializer->serialize($fontDeSerialized, 'xml');

        $this->assertEquals($fontSerialized, $this->xmlExpect['Font']);
    }

    public function testPostScriptName(){

        $font = new Font();
        $font->setPostScriptName('PostScriptName');
        $fontSerialized = $this->serializer->serialize($font, 'xml');
        $fontDeSerialized = $this->serializer->deSerialize($fontSerialized, Font::class,'xml');

        $this->assertEquals($fontDeSerialized->getPostScriptName(), 'PostScriptName');
    }

    public function testName(){

        $font = new Font();
        $font->setName('Name');
        $fontSerialized = $this->serializer->serialize($font, 'xml');
        $fontDeSerialized = $this->serializer->deSerialize($fontSerialized, Font::class,'xml');

        $this->assertEquals($fontDeSerialized->getName(), 'Name');
    }

    public function testFontFamilyAttribute(){

        $font = new Font();
        $font->setFontFamily('FontFamily');
        $fontSerialized = $this->serializer->serialize($font, 'xml');
        $fontDeSerialized = $this->serializer->deSerialize($fontSerialized, Font::class,'xml');

        $this->assertEquals($fontDeSerialized->getFontFamily(), 'FontFamily');
    }

    public function testFontFamilyValue(){

        $font = new Font();
        $font->setName('Name');
        $fontFamily = new FontFamily();
        $fontFamily->setFont([$font]);
        $fontFamilySerialized = $this->serializer->serialize($fontFamily, 'xml');
        $fontDeSerialized = $this->serializer->deSerialize($fontFamilySerialized, FontFamily::class,'xml');

        $this->assertEquals($fontDeSerialized->getFont(), [$font]);
    }
    public function testFontWrapper(){

        $font = new Font();
        $font->setName('Name');

        $fontFamily = new FontFamily();
        $fontFamily->setFont([$font]);

        $fontIdpkg = new FontIdpkg();
        $fontIdpkg->setFontFamily([$fontFamily]);

        $fontIdpkgSerialized = $this->serializer->serialize($fontIdpkg, 'xml');
        $fontDeSerialized = $this->serializer->deSerialize($fontIdpkgSerialized, FontIdpkg::class,'xml');

        $this->assertEquals($fontDeSerialized->getFontFamily(), [$fontFamily]);
    }
}