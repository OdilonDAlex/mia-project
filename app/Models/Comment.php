<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comment extends Model
{
    protected $fillable = [
        'content',
        'reaction_id'
    ];

    use HasFactory;

    public function post(): BelongsTo{
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function reaction(): HasOne{
        return $this->hasOne(Reaction::class, 'reaction_id');
    }
}
