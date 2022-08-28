<?php

declare(strict_types=1);

namespace Specification;

use Specification\AndSpecification;
use Specification\OrSpecification;
use Specification\SpecificationInterface;

/**
 * source: https://en.wikipedia.org/wiki/Specification_pattern
 */
abstract class CompositeSpecification implements SpecificationInterface
{
	abstract public function isSatisfiedBy(object $item): bool;

	public function and(SpecificationInterface $specificationItem): SpecificationInterface
    {
        return new AndSpecification($this, $specificationItem);
    }

	public function or(SpecificationInterface $specificationItem): SpecificationInterface
    {
        return new OrSpecification($this, $specificationItem);
    }

	public function not(): SpecificationInterface
    {
        return new OrSpecification($this);
    }
}
