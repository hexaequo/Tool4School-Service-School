<?php


namespace App\Exception;


use Symfony\Component\HttpKernel\Exception\HttpException;

abstract class MessengerException extends HttpException
{
    public function __construct(int $statusCode, string $message = null)
    {
        parent::__construct($statusCode, $message);
    }
}
