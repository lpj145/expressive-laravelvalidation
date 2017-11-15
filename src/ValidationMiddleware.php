<?php
namespace ExpressiveLaravelValidation;

use Illuminate\Validation\Factory;
use Illuminate\Validation\Validator;
use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ValidationMiddleware implements MiddlewareInterface
{
    /**
     * ValidationMiddleware constructor.
     * @param Validation $validator
     */
    private $validator;

    public function __construct(Validation $validator)
    {
        $this->validator = $validator;
    }

    /**
     * When receive requests, middleware pass data to validator, and create magic function 'validate' on request
     * @param ServerRequestInterface $request
     * @param DelegateInterface $delegate
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        $this->validator->setData($request->getParsedBody());
        $request->validate = $this->validator;
        return $delegate->process($request);
    }

}
