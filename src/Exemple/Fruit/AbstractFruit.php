<?php

declare(strict_types=1);

namespace Exemple\Fruit;

abstract class AbstractFruit
{
	protected int $number;

	public function __construct(int $number)
	{
		$this->number = $number;
	}

	public function getNumber(): int
	{
		return $this->number;
	}

	public function setNumber($number): self
	{
		$this->number = $number;

		return $this;
	}
}
