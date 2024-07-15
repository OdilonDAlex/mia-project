<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'positive',
        'negative'
    ];

    public function post(): HasOne {
        return $this->hasOne(Post::class, 'reaction_id');
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class);
    }

    public function comment(): BelongsTo{
        return $this->belongsTo(Comment::class, 'reaction_id');
    }
}
