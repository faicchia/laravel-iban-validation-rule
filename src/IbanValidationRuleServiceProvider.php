<?php

declare(strict_types=1);

namespace Faicchia\IbanValidation;

use Illuminate\Support\ServiceProvider;

class IbanValidationRuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/ibanValidationRule'),
        ]);

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'ibanValidationRule');
    }
}
