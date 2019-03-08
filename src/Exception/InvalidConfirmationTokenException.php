<?php
/**
 * Created by PhpStorm.
 * User: taras
 * Date: 08.03.19
 * Time: 17:56
 */

namespace App\Exception;


use Throwable;

class InvalidConfirmationTokenException extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct('Confirmation token is invalid.', $code, $previous);
    }
}