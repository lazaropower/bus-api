<?php

namespace App\Enum;

enum UserRole: string {
    case STANDARD = 'standard';
    case STUDENT = 'student';
    case RETIRED = 'retired';

    public static function getValues(): array
    {
        $reflectionClass = new \ReflectionClass(self::class);
        return $reflectionClass->getConstants();
    }
}