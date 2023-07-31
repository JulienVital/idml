<?php

use Jvital\Idml\Builder\IdmlDocument;

use Jvital\Idml\JsonClass\PageJson;
use PHPUnit\Framework\TestCase;


class PageTest extends TestCase{
        // make test for check number of spread when add page
        // first page binding location 0 page count 1
        // other binding 1 page count 2
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
