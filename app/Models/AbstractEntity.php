<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractEntity extends Model
{
    protected $fillable = [
        'date_created',
        'date_modified',
        'created_by',
        'modified_by',
    ];

    public $timestamps = false;

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->date_created = now();
            $model->created_by = auth()->id() ?? 'system';
        });

        static::updating(function ($model) {
            $model->date_modified = now();
            $model->modified_by = auth()->id() ?? 'system';
        });
    }
}