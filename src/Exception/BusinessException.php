<?php

namespace Sndwow\Sand\Exception;

use Sndwow\Sand\Contract\GatewayInterface;
use Throwable;

class BusinessException extends SandException
{
    
    protected $statusCode = 401;
    
    public function __construct(string $message, GatewayInterface $gateway = null, Throwable $previous = null)
    {
        parent::__construct($message, 401, $previous);
    }
    
    public function getStatusCode():int
    {
        return $this->statusCode;
    }
    
    public function setStatusCode(int $statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }
}
