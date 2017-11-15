<?php
namespace ExpressiveLaravelValidation;

use ExpressiveLaravelValidation\Factory\LaravelValidationFactory;
use ExpressiveLaravelValidation\Factory\ValidationFactory;
use Illuminate\Validation\Validator;

class ConfigProvider
{
    public function __invoke()
    {
        return [
          'dependencies' => $this->getDependencies(),
            'validation' => [
                'locale' => 'en'
            ]
        ];
    }

    public function getDependencies()
    {
        return [
          'factories' => [
              Validator::class => LaravelValidationFactory::class,
              Validation::class => ValidationFactory::class,
          ]
        ];
    }
}
