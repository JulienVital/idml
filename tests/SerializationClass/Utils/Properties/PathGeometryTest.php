<?php

use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Jvital\Idml\SerializationClass\Utils\Properties\GeometryPathType;
use Jvital\Idml\SerializationClass\Utils\Properties\PathGeometry;
use Jvital\Idml\SerializationClass\Utils\Properties\PathPointArray;
use Jvital\Idml\SerializationClass\Utils\Properties\PathPointType;
use PHPUnit\Framework\TestCase;

class PathGeometryTest extends TestCase{

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
        $this->xmlExpect = file_get_contents(__DIR__.'/Expects/PathGeometry.xml');
    }

    public function testSerializeDeserialize(){
        $pathGeometryDeSerialized = $this->serializer->deSerialize($this->xmlExpect, PathGeometry::class,'xml');

        $pathGeometrySerialized = $this->serializer->serialize($pathGeometryDeSerialized, 'xml');

        $this->assertEquals($pathGeometrySerialized, $this->xmlExpect);
    }

    public function testCreatePathGeometry(){
        $pathGeometry = new PathGeometry();

        $pathGeometrySerialized = $this->serializer->serialize($pathGeometry, 'xml');
        $pathGeometryDeSerialized = $this->serializer->deSerialize($pathGeometrySerialized, PathGeometry::class,'xml');

        $this->assertEquals($pathGeometryDeSerialized, $pathGeometry);
    }
    
    public function testCreatePathTypeGeometry(){
        $pathGeometry = new PathGeometry();
        $geometryPathType = new GeometryPathType();
        $geometryPathType->setPathOpen(true);
        $pathGeometry->setGeometryPathType($geometryPathType);

        $pathGeometrySerialized = $this->serializer->serialize($pathGeometry, 'xml');
        $pathGeometryDeSerialized = $this->serializer->deSerialize($pathGeometrySerialized, PathGeometry::class,'xml');
        
        $geometryPathType = $pathGeometryDeSerialized->getGeometryPathType();

        $this->assertEquals($geometryPathType->isPathOpen(), true);

        $geometryPathType->setPathOpen(false);
        $pathGeometry->setGeometryPathType($geometryPathType);

        $pathGeometrySerialized = $this->serializer->serialize($pathGeometry, 'xml');
        $pathGeometryDeSerialized = $this->serializer->deSerialize($pathGeometrySerialized, PathGeometry::class,'xml');
        
        $geometryPathType = $pathGeometryDeSerialized->getGeometryPathType();

        $this->assertEquals($geometryPathType->isPathOpen(), false);
    }

    public function testPathPointType(){

        $pathGeometry = new PathGeometry();
        $geometryPathType = new GeometryPathType();
        $pathPointArray = new PathPointArray();
        $pathPoint = new PathPointType();

        $pathPoint->setAnchor('anchorTest')
            ->setLeftDirection('leftDirection')
            ->setRightDirection('rightDirection');
        
        $pathPointArray->setPathPointType([$pathPoint]);
        $geometryPathType->setPathPointArray($pathPointArray);

        $pathGeometry->setGeometryPathType($geometryPathType);

        $pathGeometrySerialized = $this->serializer->serialize($pathGeometry, 'xml');
        $pathGeometryDeSerialized = $this->serializer->deSerialize($pathGeometrySerialized, PathGeometry::class,'xml');
        
        $pathPointDeserialized = $pathGeometryDeSerialized->getGeometryPathType()->getPathPointArray()->getPathPointType()[0];

        $this->assertEquals($pathPointDeserialized->getAnchor(), 'anchorTest');
        $this->assertEquals($pathPointDeserialized->getLeftDirection(), 'leftDirection');
        $this->assertEquals($pathPointDeserialized->getRightDirection(), 'rightDirection');
    }
}