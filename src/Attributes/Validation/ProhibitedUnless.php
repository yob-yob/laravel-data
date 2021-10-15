<?php

namespace Spatie\LaravelData\Attributes\Validation;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class ProhibitedUnless extends ValidationAttribute
{
    public function __construct(
        private string $field,
        private array | string $values
    ) {
    }

    public function getRules(): array
    {
        return ["prohibited_unless:{$this->field},{$this->normalizeValue($this->values)}"];
    }
}