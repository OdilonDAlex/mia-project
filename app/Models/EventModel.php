<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EventModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'at'
    ];

    public function author(): BelongsTo{
        return $this->belongsTo(User::class, 'author_id');
    } 

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class, 'event_model_user', 'event_id', 'user_id');
    }
}                                       
