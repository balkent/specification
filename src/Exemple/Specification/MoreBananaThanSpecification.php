<?php

declare(strict_types=1);

namespace Exemple\Specification;

use Specification\CompositeSpecification;

class MoreBananaThanSpecification extends CompositeSpecification
{
    private int $max;

    public function __construct(int $max)
    {
        $this->max = $max;
    }

    public function isSatisfiedBy($fruitBasket): bool
    {
        return $fruitBasket->getBanana()->getNumber() > $this->max;
    }
}
