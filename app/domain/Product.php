<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\domain;

use interfaces\IEntity;

/**
 * Description of Product
 *
 * @author ilya
 */
class Product implements IEntity {

    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        ;
    }

}
