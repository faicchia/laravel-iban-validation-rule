# Laravel Iban Validation Rule

[![Packagist](https://img.shields.io/packagist/v/faicchia/laravel-iban-validation-rule)](https://packagist.org/packages/faicchia/laravel-iban-validation-rule/)
[![Tests](https://github.com/faicchia/laravel-iban-validation-rule/actions/workflows/run-tests.yaml/badge.svg)](https://github.com/faicchia/laravel-iban-validation-rule/actions/workflows/run-tests.yaml)
[![Style](https://github.com/faicchia/laravel-iban-validation-rule/actions/workflows/php-cs-fixer.yaml/badge.svg)](https://github.com/faicchia/laravel-iban-validation-rule/actions/workflows/php-cs-fixer.yaml)
[![License](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/faicchia/laravel-iban-validation-rule/blob/main/LICENSE.md)

A Laravel rule around [jschaedl/iban-validation](https://github.com/jschaedl/iban-validation).

## Installation

```bash
composer require faicchia/laravel-iban-validation-rule
```

The package will automatically register itself.

### Translations

If you wish to edit the package translations, you can run the following command to publish them into your `resources/lang` folder:

```bash
php artisan vendor:publish --provider="Faicchia\IbanValidation\IbanValidationRuleServiceProvider"
```

English and Italian translations are already shipped with the package.

## Usage

```php
// in a `FormRequest`

use Faicchia\IbanValidation\Rules\Iban;

public function rules(): array
{
    return [
        'iban' => [new Iban()]
    ];
}
```
