<?php
namespace ExpressiveLaravelValidation;

use Illuminate\Validation\Factory;

class Validation extends Factory
{
    /**
     * @var Factory
     */
    private static $instance;

    public function setAsGlobal()
    {
        static::$instance = $this;
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return static::$instance;
    }
}
