<?php

declare(strict_types=1);

use Faicchia\IbanValidation\Rules\Iban;

it('passes with valid IBAN', function () {
    $this->assertTrue(
        (new Iban())->passes('iban', 'IT60X0542811101000000123456')
    );
});

it('fails with invalid IBAN', function () {
    $this->assertFalse(
        (new Iban())->passes('iban', 'THIS_IS_AN_INVALID_IBAN')
    );
});

it('fails with empty IBAN', function () {
    $this->assertFalse(
        (new Iban())->passes('iban', '')
    );
});

it('fails with null IBAN', function () {
    $this->assertFalse(
        (new Iban())->passes('iban', null)
    );
});