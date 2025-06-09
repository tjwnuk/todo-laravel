<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TodoItem extends Model
{
    protected $fillable = [
        'name',
        'description',
        'priority',
        'status',
        'deadline',
        'user_id',
    ];

    protected $casts = [
        'deadline' => 'date',
    ];

    /**
     * TodoItem belongs to one user.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
