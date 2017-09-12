<?php


namespace App\Exceptions;


use Throwable;

class RecipeNotFoundException extends \Exception
{
    public function __construct($message = "", $code = 410, Throwable $previous = null)
    {
        $message = "Recipe '{$message}' not available";

        parent::__construct($message, $code, $previous);
    }
}