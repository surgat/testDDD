<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\domain\interfaces;

/**
 *
 * @author ilya
 */
interface IQueryFactory {

    public function getQuery($class, ISpecification $spec): IQuery;
}