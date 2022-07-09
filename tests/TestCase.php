<?php

declare(strict_types=1);

namespace Faicchia\IbanValidation\Tests;

use Faicchia\IbanValidation\IbanValidationRuleServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            IbanValidationRuleServiceProvider::class,
        ];
    }
}