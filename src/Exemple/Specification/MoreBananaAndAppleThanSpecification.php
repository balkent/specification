<?php

declare(strict_types=1);

namespace Exemple\Specification;

use Specification\CompositeSpecification;

class MoreBananaAndAppleThanSpecification extends CompositeSpecification
{
    private int $maxApple;
    private int $maxBanana;

    public function __construct(
		int $maxApple,
		int $maxBanana
	) {
        $this->maxApple = $maxApple;
        $this->maxBanana = $maxBanana;
    }

    public function isSatisfiedBy($fruitBasket): bool
    {
		return (new MoreAppleThanSpecification($this->maxApple))
			->and(new MoreBananaThanSpecification($this->maxBanana))
			->isSatisfiedBy($fruitBasket);
    }
}
