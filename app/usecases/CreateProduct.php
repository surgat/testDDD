<?php

namespace app\usecases;

use app\domain\interfaces\ICommandFactory;
use app\domain\Product;

class CreateProduct {

    private $factory;

//    public function __construct(IQueryFactory $factory) {
//        $this->factory = $factory;
//    }

    public function __construct(ICommandFactory $factory) {
        $this->factory = $factory;
    }

    public function process(Product $model) {
        $command = $this->factory->getCreateCommand($model);
        $command->execute();
    }

}
