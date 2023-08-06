<?php

use Jvital\Idml\SerializationClass\Idml\IdmlDocument;
use Jvital\Idml\SerializationClass\Json\Elements\Text;
use Jvital\Idml\SerializationClass\Json\PageJson;
use PHPUnit\Framework\TestCase;


class PageTest extends TestCase{

    public function testAddOnePageCreateOneSpread(){
        
        $idmlDocument = new IdmlDocument("document name");

        $idmlDocument->addPages([new PageJson()]);

        $this->assertTrue(count($idmlDocument->getDesignMap()->getSpread()) == 1);
        $this->assertEquals($idmlDocument->getSpreads()[0]->getSpread()->getBindingLocation(), 0);
        $this->assertEquals($idmlDocument->getSpreads()[0]->getSpread()->getPageCount(), 1);
    }

    public function testAddTwoPageCreateTwoSpread(){
        
        $idmlDocument = new IdmlDocument("document name");

        $idmlDocument->addPages([new PageJson(),new PageJson()]);

        $this->assertTrue(count($idmlDocument->getDesignMap()->getSpread()) == 2);
        $this->assertEquals($idmlDocument->getSpreads()[1]->getSpread()->getBindingLocation(), 1);
        $this->assertEquals($idmlDocument->getSpreads()[1]->getSpread()->getPageCount(), 1);
    }

    public function testAddThreePageCreateTwoSpread(){
        
        $idmlDocument = new IdmlDocument("document name");

        $idmlDocument->addPages([new PageJson(),new PageJson(),new PageJson()]);
        $this->assertTrue(count($idmlDocument->getDesignMap()->getSpread()) == 2);
        $this->assertEquals($idmlDocument->getSpreads()[1]->getSpread()->getBindingLocation(), 1);
        $this->assertEquals($idmlDocument->getSpreads()[1]->getSpread()->getPageCount(), 2);
    }

}
