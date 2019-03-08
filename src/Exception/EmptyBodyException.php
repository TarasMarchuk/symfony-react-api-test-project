<?php
/**
 * Created by PhpStorm.
 * User: taras
 * Date: 08.03.19
 * Time: 16:25
 */

namespace App\Exception;


use Throwable;

class EmptyBodyException extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct('The body of the POST/PUT method cannot be empty', $code, $previous);
    }
}