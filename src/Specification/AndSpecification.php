<?php

declare(strict_types=1);

namespace Specification;

/**
 * source: https://designpatternsphp.readthedocs.io/en/latest/Behavioral/Specification/README.html
 */
class AndSpecification extends CompositeSpecification
{
    /** @var SpecificationInterface[] */
    private array $specifications;

    /**
     * @param SpecificationInterface[] $specifications
     */
    public function __construct(SpecificationInterface ...$specifications)
    {
        $this->specifications = $specifications;
    }

    /**
     * if at least one specification is false, return false, else return true.
     */
    public function isSatisfiedBy(object $item): bool
    {
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($item)) {
                return false;
            }
        }

        return true;
    }
}
