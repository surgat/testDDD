<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace tests\fake;

use app\domain\interfaces\ISpecification;
use app\domain\interfaces\IQuery;

/**
 * Description of QueryFactory
 *
 * @author ilya
 */
class QueryFactory implements \app\domain\interfaces\IQueryFactory {

    public function getQuery($class, ISpecification $spec): IQuery {
        $name = substr($class, strrpos($class, '\\') + 1);
        
        $specName = get_class($spec);
        $name .= substr($specName, strrpos($specName, '\\') + 1);
        $name .= 'Query';

        return new $name;
    }

}
