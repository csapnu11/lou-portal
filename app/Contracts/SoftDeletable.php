<?php

namespace App\Contracts;

interface SoftDeletable
{
    public function softDelete(): bool;
    public function restoreEntity(): bool;
}