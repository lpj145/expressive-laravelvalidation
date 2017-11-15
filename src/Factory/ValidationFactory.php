<?php
namespace ExpressiveLaravelValidation\Factory;


use ExpressiveLaravelValidation\Validation;
use Illuminate\Validation\Factory;
use Psr\Container\ContainerInterface;

class ValidationFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new Validation($container->get(Factory::class));
    }
}
