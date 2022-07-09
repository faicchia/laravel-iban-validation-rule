<?php

declare(strict_types=1);

namespace Faicchia\IbanValidation\Rules;

use Iban\Validation\Validator;
use Illuminate\Contracts\Validation\Rule;

class Iban implements Rule
{
    /** @var string */
    protected $attribute;

    public function passes($attribute, $value): bool
    {
        $this->attribute = $attribute;

        return (new Validator())->validate(new \Iban\Validation\Iban($value));
    }

    public function message(): string
    {
        return __('ibanValidationRule::validation.iban', [
            'attribute' => $this->attribute,
        ]);
    }
}