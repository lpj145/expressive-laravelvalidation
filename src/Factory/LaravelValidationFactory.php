<?php
namespace ExpressiveLaravelValidation\Factory;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation\FileLoader;
use Illuminate\Translation\Translator;
use Illuminate\Validation\Factory;
use Psr\Container\ContainerInterface;

class LaravelValidationFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $translator = new Translator(
            new FileLoader(
                new Filesystem(),
                __DIR__.'/../vendor/caouecs/laravel-lang/src/'
            ),
            $container->get('config')['validation']['locale'] ?? 'en'
        );
        return new Factory($translator);
    }
}
