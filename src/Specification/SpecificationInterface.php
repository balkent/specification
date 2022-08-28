<?php

declare(strict_types=1);

namespace Specification;

interface SpecificationInterface
{
    public function isSatisfiedBy(object $item): bool;

	public function or(SpecificationInterface $specificationItem): SpecificationInterface;
    public function and(SpecificationInterface $specificationItems): SpecificationInterface;
    public function not(): SpecificationInterface;
}
