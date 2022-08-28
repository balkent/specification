<?php

declare(strict_types=1);

namespace Exemple;

use Exemple\Fruit\Apple;
use Exemple\Fruit\Banana;
use Exemple\Fruit\FruitInterface;
use Exemple\Specification\MoreAppleThanSpecification;
use Exemple\Specification\MoreBananaAndAppleThanSpecification;
use Exemple\Specification\MoreBananaThanSpecification;

class FruitBasket
{
    private array $fruits;

    public function __construct(array $fruits)
    {
        $this->fruits = $fruits;
    }

    public function getFruits(): array
    {
        return $this->fruits;
    }

    private function getFruitsOf(string $fruitType): FruitInterface
    {
		foreach ($this->fruits as $fruit) {
			if ($fruit instanceof $fruitType) {
				return $fruit;
			}
		}

        return new $fruitType(0);
    }

    public function getBanana(): Banana
    {
		return $this->getFruitsOf(Banana::class);
    }

    public function getApple(): Apple
    {
		return $this->getFruitsOf(Apple::class);
    }

    public function setFruits($fruits): self
    {
        $this->fruits = $fruits;

        return $this;
    }

    public function goodBasket(): bool
    {
		if (1 > count($this->fruits)) {
			return false;
		}

		return (new MoreAppleThanSpecification(2))
			->and(new MoreBananaThanSpecification(3))
			->isSatisfiedBy($this);
    }

    public function goodBasketWithChain(): bool
    {
		if (1 > count($this->fruits)) {
			return false;
		}

		return (new MoreBananaAndAppleThanSpecification(2, 5))->isSatisfiedBy($this);
    }
}
