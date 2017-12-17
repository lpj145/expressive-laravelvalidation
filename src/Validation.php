<?php
namespace ExpressiveLaravelValidation;

use Illuminate\Validation\Factory;

class Validation extends Factory
{
    /**
     * @var Factory
     */
    private static $instance;

    /**
     * Set as global scope functionality
     */
    public function setAsGlobal()
    {
        self::$instance = $this;
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::$instance;
    }
}
