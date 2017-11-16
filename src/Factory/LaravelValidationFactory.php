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
        $locale = $container->get('config')['validation']['locale'] ?? 'pt-BR';
        $translator = new Translator(
            new FileLoader(
                new Filesystem(),
                __DIR__.'/../../vendor/caouecs/laravel-lang/src'
            ),
            $locale
        );
        return new Factory($translator);
    }
}
