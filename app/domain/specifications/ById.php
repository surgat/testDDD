<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\domain\specifications;
use app\domain\interfaces\ISpecification;
/**
 * Description of ById
 *
 * @author ilya
 */
class ById implements ISpecification {

    public $id;

    public function __construct($id) {
        $this->id = $id;
    }

}
