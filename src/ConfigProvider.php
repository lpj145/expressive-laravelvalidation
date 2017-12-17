<?php
namespace ExpressiveLaravelValidation;


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
                  Validation::class => ValidationFactory::class
              ]
        ];
    }
}
