<?php
namespace ExpressiveLaravelValidation;

use Illuminate\Validation\Factory;

class Validation
{
    /**
     * @var Factory
     */
    private $factory;
    /**
     * @var array
     */
    private $data;

    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @param array $rules
     * @return \Illuminate\Validation\Validator
     */
    public function __invoke(array $rules)
    {
        return $this->factory->make($this->data, $rules);
    }
}
