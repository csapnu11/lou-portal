<?php

namespace App\Enums;

enum UserRole: string
{
    case STUDENT = 'STUDENT';
    case FACULTY = 'FACULTY';
    case STAFF = 'STAFF';
    case ADMIN = 'ADMIN';
    case DEFAULT = 'DEFAULT';
}
