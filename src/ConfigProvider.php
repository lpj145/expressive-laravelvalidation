<?php
namespace ExpressiveLaravelValidation;

use ExpressiveLaravelValidation\Factory\LaravelValidationFactory;
use ExpressiveLaravelValidation\Factory\ValidationFactory;
use ExpressiveLaravelValidation\Factory\ValidationMiddlewareFactory;
use Illuminate\Validation\Factory;
use Illuminate\Validation\Validator;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'dependencies' => $this->getDependencies(),
            'validation' => [
                'locale' => 'pt-BR'
            ]
        ];
    }

    public function getDependencies()
    {
        return [
              'factories' => [
                  Factory::class => LaravelValidationFactory::class,
              ]
        ];
    }
}
