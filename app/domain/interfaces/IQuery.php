<?php

namespace app\domain\interfaces;

interface IQuery {

    public function one(): IEntity;

    public function all(): EntityCollection;

    public function total(): int;
}
