<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\usecases;

use app\domain\interfaces\IQueryFactory;
use app\domain\specifications\ByCategory;
use app\domain\Product;
/**
 * Description of ListCatalog
 *
 * @author ilya
 */
class ListCatalog {

    /**
     *
     * @var IQueryFactory 
     */
    private $factory;

    public function __construct(IQueryFactory $factory) {
        $this->factory = $factory;
    }

    public function process($id) {
        $query = $this->factory->getQuery(Product::class, new ByCategory($id));

        $result = [
            'items' => $query->all(),
            'total' => $query->total()
        ];
        
        return $result;
    }

}
