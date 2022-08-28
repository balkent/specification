<?php

declare(strict_types=1);

namespace Specification;

/**
 * source: https://designpatternsphp.readthedocs.io/en/latest/Behavioral/Specification/README.html
 */
class NotSpecification extends CompositeSpecification
{
	private SpecificationInterface $specification;

	public function __construct(SpecificationInterface $specification)
	{
		$this->specification = $specification;
	}

	public function isSatisfiedBy(SpecificationInterface $specificationItems): bool
	{
        return !$this->specification->isSatisfiedBy($specificationItems);
	}
}
