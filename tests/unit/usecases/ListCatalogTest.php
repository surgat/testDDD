<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use app\usecases\ListCatalog;

/**
 * Description of ListCatalogTest
 *
 * @author ilya
 */
class ListCatalogTest extends PHPUnit_Framework_TestCase {

    public function testProcess() {
        $factory = new tests\fake\QueryFactory();
        $uc = new ListCatalog($factory);
        
        $result = $uc->process(1);
    }

}
