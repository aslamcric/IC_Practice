<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task34 extends Model
{
    /** @use HasFactory<\Database\Factories\Task34Factory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'is_completed'
    ];

    protected function casts()
    {
        return [
            'is_completed' => 'boolean'
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
