<?php

declare(strict_types=1);

namespace Specification;

/**
 * source: https://designpatternsphp.readthedocs.io/en/latest/Behavioral/Specification/README.html
 */
class OrSpecification extends CompositeSpecification
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

    /*
     * if at least one specification is true, return true, else return false
     */
    public function isSatisfiedBy(SpecificationInterface $specificationItems): bool
    {
        foreach ($this->specifications as $specification) {
            if ($specification->isSatisfiedBy($specificationItems)) {
                return true;
            }
        }

        return false;
    }
}
