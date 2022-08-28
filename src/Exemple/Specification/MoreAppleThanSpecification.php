<?php

declare(strict_types=1);

namespace Exemple\Specification;

use Specification\CompositeSpecification;

class MoreAppleThanSpecification extends CompositeSpecification
{
    private int $max;

    public function __construct(int $max)
    {
        $this->max = $max;
    }

    public function isSatisfiedBy($fruitBasket): bool
    {
        return $fruitBasket->getApple()->getNumber() > $this->max;
    }
}
