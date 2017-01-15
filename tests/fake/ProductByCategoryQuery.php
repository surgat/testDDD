<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace tests\fake;

/**
 * Description of ProductQuery
 *
 * @author ilya
 */
class ProductQuery implements \app\domain\interfaces\IQuery {
    //put your code here
    public function all(): \app\domain\interfaces\EntityCollection {
        $collection = new \app\domain\interfaces\EntityCollection;
        
        return $collection;
    }

    public function one(): \app\domain\interfaces\IEntity {
        
    }

    public function total(): int {
        return 1;
    }

}
