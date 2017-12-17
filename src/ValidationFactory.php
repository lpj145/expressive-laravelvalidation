<?php
namespace ExpressiveLaravelValidation;

use Psr\Container\ContainerInterface;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Translation\FileLoader;
use Illuminate\Translation\Translator;

class ValidationFactory
{
    public function __construct(ContainerInterface $container)
    {
        $locale = $container->get('config')['validation']['locale'] ?? 'pt-BR';
        $translator = new Translator(
            new FileLoader(
                new Filesystem(),
                __DIR__.'/../lang/'
            ),
            $locale
        );

        return new Validation($translator);
    }
}
