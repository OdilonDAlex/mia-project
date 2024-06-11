<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'reaction_id'
    ];


    public function users(): BelongsTo{
        return $this->belongsTo(User::class, 'author_id');
    }

    public function reaction(): BelongsTo{
        return $this->belongsTo(Reaction::class, 'reaction_id');
    }
}
