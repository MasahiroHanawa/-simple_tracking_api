<?php
namespace App\Validation\Exceptions;

use Respect\Validation\Exceptions\ValidationException;

class UniqueUserException extends ValidationException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => 'User already registered',
        ]
    ];
}