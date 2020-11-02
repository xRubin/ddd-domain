<?php declare(strict_types=1);

namespace ddd\domain\values;

interface DomainValueInterface
{
    public function getValue();
    public function isEqualTo(DomainValueInterface $entity): bool;
}