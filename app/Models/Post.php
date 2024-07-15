<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'reaction_id'
    ];


    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'author_id');
    }

    public function reaction(): BelongsTo{
        return $this->belongsTo(Reaction::class, 'reaction_id');
    }

    public function comments(): HasMany{
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function getCreationaDateTime(){
        return (new Carbon($this->created_at))->format('d m H i s');
    }
}
