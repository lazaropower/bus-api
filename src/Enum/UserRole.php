<?php

namespace App\Enum;

enum UserRole: string {
    case STANDARD = 'standard';
    case STUDENT = 'student';
    case RETIRED = 'retired';

}