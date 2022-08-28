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
    public function isSatisfiedBy(SpecificationInterface $specificationItems): bool
    {
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($specificationItems)) {
                return false;
            }
        }

        return true;
    }
}
