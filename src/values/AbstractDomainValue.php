<?php declare(strict_types=1);

namespace ddd\domain\values;

abstract class AbstractDomainValue implements DomainValueInterface
{
    public function isEqualTo(DomainValueInterface $entity): bool
    {
        if (get_class($this) !== get_class($entity))
            return false;

        if ($this->getValue() !== $entity->getValue())
            return false;

        return true;
    }
}