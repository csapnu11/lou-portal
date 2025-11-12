<?php

namespace App\Models;

use App\Contracts\SoftDeletable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Announcement extends AbstractEntity implements SoftDeletable
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'is_active',
        'is_deleted',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_deleted' => 'boolean',
    ];

    protected $dates = ['deleted_at'];

    // Implement SoftDeletable interface
    public function softDelete(): bool
    {
        $this->update([
            'is_active' => false,
            'is_deleted' => true
        ]);
        return $this->delete();
    }

    public function restoreEntity(): bool
    {
         $this->update([
            'is_active' => true,
            'is_deleted' => false
        ]);
        return $this->restore();
    }
}